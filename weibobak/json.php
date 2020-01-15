<?php



foreach( glob(  '*.html' ) as $k => $htmlfile )
{
	echo "File $htmlfile ...";
	$reg = '/this\.feeds\s+=\s+(.+?)\}\s+,\s+1000/is';
	$content = file_get_contents( $htmlfile );

	if( preg_match( $reg , $content , $out ) )
	{
		if($data = json_decode( trim($out[1]) , 1 ))
		{
			@mkdir( 'json/', 0777 , true  );
			$jsonfile = 'json/'  . basename( $htmlfile ) . '.json';
			file_put_contents( $jsonfile , trim($out[1]) );

			echo "done.\r\n";
		}
		else
			echo "error.\r\n";
		

	}
}

echo "ALL Done.";


