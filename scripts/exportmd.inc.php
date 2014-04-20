<?php
// PukiWiki - Yet another WikiWikiWeb clone
// This script converts all pages as Markdown Documents
// I looked at JuJu's sitemap as the example
// Copyright (C)
//   2014/04/20 Kiichi Takeuchi http://www.objectgraph.com/
//   2007/02/27 JuJu http://su-u.jp/juju/
//              v 1.1 original
//   2007/03/04 JuJu http://su-u.jp/juju/
//              v 1.2 change XML schema www.sitemaps.org
//   2007/03/11 JuJu http://su-u.jp/juju/
//              v 1.3 add select page prefix, and page allow(disallow)
//
// License: GPL v2 or (at your option) any later version
//
// Google-Sitemaps plugin - Create Google-Sitemaps.
//
// Usage:
//    plugin=exportmd

function sanitize_file_name( $filename ) {
	return preg_replace("([^\w\s\d\-_~,;:\[\]\(\].]|[\.]{2,})", '_', $filename);
}

function PLUGIN_EXPORTMD_convert() { return ''; }

function PLUGIN_EXPORTMD_action() {

	global $whatsnew, $non_list;
	global $vars;


	$pages = get_existpages();//array();
/*
	foreach(get_existpages() as $page) {
		if ( ($page != $whatsnew) and 
				! preg_match("/$non_list/", $page) and
				( ($prefix == '') or (strpos($page, $prefix . '/') === 0) ) and
				( (PLUGIN_EXPORTMD_PAGE_DISALLOW  == '') or ! preg_match('/' . PLUGIN_EXPORTMD_PAGE_DISALLOW  . '/', $page) ) )
			if( check_readable($page, false, false) )
				$pages[$page] = get_filetime($page);
	}
*/
	//arsort($pages, SORT_NUMERIC);
	$urls = '';
	$count = 100000;
	mkdir("export/md",0700,TRUE);
	mkdir("export/html",0700,TRUE);
	mkdir("export/wiki",0700,TRUE);
	foreach ($pages as $page) {
		//if($count > 0 && preg_match("/$non_list/", $page)  && ( ($prefix == '') or (strpos($page, $prefix . '/') === 0) ) && $page != $whatsnew && check_readable($page, false, false) ) {
		if($count > 0 ){
			//$r_page = rawurlencode($page);
			//$link = $script . '?' . $r_page;
			//$date = gmdate('Y-m-d\TH:i:s', $time + ZONETIME) . '+00:00';
			//$urls .= $page."\n";
			$parts = explode("/",$page);
			//$urls.=count($parts);
			//$path = implode("-",$parts);
			$last = count($parts)-1;
			if ($last > 0) {
				$path = $page;
				/*
				$dir_arr = array_slice($parts,0,$last);
				$path = implode("/",$dir_arr);
				$title = $parts[$last];
				$title_arr = explode("-",$title);
				if (count($title_arr) > 0){
					for ($i=0; $i<count($title_arr); $i++) {
						$title = trim($title_arr[$i]);
						if ($title[0] == ".") {
							$title = "Page_".$title;
						}
						$path .= "/".$title;
					}		
				}
				$path= preg_replace("/\/\//i","/",$path);
				*/
			}
			else {
				$path = "error";
				continue;
			}
			//$result = mkdir($path,0700,true);
			//$urls .= $result."\n";
			$urls .= $path."\n";	
			$source = implode("",get_source($page))."\n";	

			$md = "";
			$lines = explode("\n",$source);
			$prev = "";
			foreach ($lines as $line) {
				// mmm redo this part
				if ($line[0] == "\t") {
					$line[0] = " ";
				}
				if ($line[0] == " " && $line[1] != " " && $prev[0] != " "){
					$md .= "```".strtolower($parts[0]);
				}
				else if ($line[0] != " " && $prev[0] == " " && $prev[1] != " "){
					if (count($prev) == 1) {
						$md .= " ";
					}
					$md .= "```";
				}
				else {
					$line = preg_replace("/^#.*/i","",$line);
					$line = preg_replace("/^\*\*\*/i","###",$line);
					$line = preg_replace("/^\*\*/i","##",$line);
					$line = preg_replace("/^\*+/i","#",$line);
					$md .= $line;
				}
				$md .= "\n";
				$prev = $line;
			}

$template = <<<EOF
<!DOCTYPE html>
<html>
<title>$page</title>
<xmp theme="united" style="display:none;">
$md
</xmp>
<script src="http://strapdownjs.com/v/0.2/strapdown.js"></script>
</html>
EOF;

			$subdir = dirname($path);
			$filename = sanitize_file_name(basename($path));
			
			mkdir("export/md/".$subdir,0700,TRUE);
			mkdir("export/html/".$subdir,0700,TRUE);
			mkdir("export/wiki/".$subdir,0700,TRUE);
			
			file_put_contents("export/md/".$subdir."/".$filename.".md",$md);
			file_put_contents("export/html/".$subdir."/".$filename.".html",$template);
			file_put_contents("export/wiki/".$subdir."/".$filename.".txt",$source);
			$count--;
		} 
		else {
			break;
		}
	}
	header("Content-Type:text/plain");
	echo $urls;
	exit;
}
?>
