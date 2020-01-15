<?php



foreach( glob(  '*.html' ) as $k => $htmlfile )
{
	echo "File: $htmlfile \r\n";

	$reg = '/this\.feeds\s+=\s+(.+?)\}\s+,\s+1000/is';

	$content = file_get_contents( $htmlfile );

	if( preg_match( $reg , $content , $out ) )
	{
		if($data = json_decode( trim($out[1]) , 1 ))
		{
			foreach ( $data as $kkk => $item ) 
			{
			
				$keys = array();
				$keys[] = 'pic_url';
				//$keys[] = 'oripic_url';
				$keys[] = 'rt_pic_url';
				//$keys[] = 'rt_oripic_url';

				foreach( $keys as $key )
				{
					if( strlen( $item[$key] ) > 0 && (substr( $item[$key] , 0 , 7 ) == 'http://' || substr( $item[$key] , 0 , 8 ) == 'https://' ) )
					{
					
						$info = explode( '.' , basename( $item[$key] ));
						$ext = end( $info );

						if( !in_array(  $ext , array( 'png' , 'jpg' , 'jpeg' , 'gif' ) ) )
						{
							$ext = 'jpg';
						}

						@mkdir( 'img/' . $k . '/' , 0777 , true  );

						$newfile = 'img/' . $k . '/' . $item['cid'] . '.'.$key.'.' .$ext;

						
						echo "Image: " . $item[$key] . "\r\n" ;

						if( copy( $item[$key] , $newfile ) )
						{
							$data[$kkk][$key] = $newfile;

							// 处理原图
							if( $key == 'rt_pic_url' )
							{
								$new_ofile = 'img/' . $k . '/' . $item['cid'] . '.'.$key.'.rtori.' .$ext;

								$nurl = str_replace( '/wap180/' , '/large/',  $item[$key] );

								echo "Image: " . $nurl . "\r\n" ;

								if( copy( $nurl , $new_ofile ) )
									$data[$kkk]['rt_oripic_url'] = $new_ofile;
							}

							// 处理原图
							if( $key == 'pic_url' )
							{
								$new_ofile = 'img/' . $k . '/' . $item['cid'] . '.'.$key.'.ori.' .$ext;

								$nurl = str_replace( '/wap180/' , '/large/',  $item[$key] );

								echo "Image: " . $nurl . "\r\n" ;

								if( copy( $nurl , $new_ofile ) )
									$data[$kkk]['oripic_url'] = $new_ofile;
							}

							echo "...done\r\n";
						}
						else
						{
							echo "...error \r\n";
						}

						echo "@Page $k \r\n";
					}	
				}

				
			}

			$content = str_replace( $out[1] , json_encode( $data ) , $content );
			file_put_contents( $htmlfile , $content );

		}
	}
}

echo "All Done!";


