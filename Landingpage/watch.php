<?php 
require_once('config.php');
require_once('include/movies.php');
//$short = $_ocim->home_url() .'/?do=watch&id='. $id ;
$short = seo_movie($id,$row['title']);
$release	= $row['release_date'];
	if (!empty($release) && !is_null($release)){
		$tempyear 	= explode("-", $release);
		$tahun 		= $tempyear[0];
		if (!is_null($tahun)){
			$title = $title ;
		}
	}
?>

<?php $watch = array("","Watch","Download");
$movie = array("", " ", "Full Movie","Full Movie Free","Full Movie Online","Full Movie in HD Quality","Full Movie Streaming Online"); 
function randomWord($input){shuffle($input);return $input[0];}; ?>

<!DOCTYPE HTML>
<html>
					<table class="table table-striped">
						<thead><caption class="text-center">TITLE</caption></thead>
                                                <tbody>	
                                                                <td class="TT1"><?php echo $row['title'];?>, full, movie, hd, <?php echo $keywords;?>, <?php echo $tahun;?> </td>
							</tbody>
							</table>
<br>
					<table class="table table-striped">
						<thead><caption class="text-center">TITLE</caption></thead>
                                                <tbody>	
                                                                <td class="TT2"><?php echo $row['title'];?> (<?php echo $tahun;?>) <?php echo "". randomWord($movie);?> </td>
							</tbody>
							</table>
<br>
<table class="table table-striped">
						<thead><caption class="text-center">TITLE</caption></thead>
                                                <tbody>	
                                                                <td class="TT3"><?php echo $genre;?>, <?php echo $tahun;?>, </td>
							</tbody>
							</table>
<br>
<table class="table table-striped">
						<thead><caption class="text-center">TITLE</caption></thead>
                                                <tbody>	
                                                                <td class="TT4">
                                                                &lt;a href=&quot;/search/?q=<?php echo $row['original_title'];?>"> <?php echo $row['original_title'];?>&lt;/a&gt;
                                                                &lt;a href=&quot;/search/?q=Watch <?php echo $row['title'];?> <?php echo $tahun;?> Full Movie Online"> Watch <?php echo $row['title'];?> <?php echo $tahun;?> Full Movie Online&lt;/a&gt;
                                                                &lt;a href=&quot;/search/?q=<?php echo $row['title'];?> <?php echo $tahun;?> Full Movie Streaming Online in HD-720p Video Quality"> <?php echo $row['title'];?> <?php echo $tahun;?> Full Movie Streaming Online in HD-720p Video Quality&lt;/a&gt;
                                                                &lt;a href=&quot;/search/?q=<?php echo $row['title'];?> <?php echo $tahun;?> Full Movie"> <?php echo $row['title'];?> <?php echo $tahun;?> Full Movie&lt;/a&gt;
                                                                &lt;a href=&quot;/search/?q=Where to Download <?php echo $row['title'];?> <?php echo $tahun;?> Full Movie ?"> Where to Download <?php echo $row['title'];?> <?php echo $tahun;?> Full Movie ?&lt;/a&gt;
                                                                &lt;a href=&quot;/search/?q=Watch <?php echo $row['title'];?> Full Movie"> Watch <?php echo $row['title'];?> Full Movie&lt;/a&gt;
                                                                &lt;a href=&quot;/search/?q=Watch <?php echo $row['title'];?> Full Movie Online"> Watch <?php echo $row['title'];?> Full Movie Online&lt;/a&gt;
                                                                &lt;a href=&quot;/search/?q=Watch <?php echo $row['title'];?> Full Movie HD 1080p"> Watch <?php echo $row['title'];?> Full Movie HD 1080p&lt;/a&gt;
                                                                &lt;a href=&quot;/search/?q=<?php echo $row['title'];?> <?php echo $tahun;?> Full Movie"> <?php echo $row['title'];?> <?php echo $tahun;?> Full Movie&lt;/a&gt;
                                                                &lt;a href=&quot;/search/?q=Download <?php echo $row['title'];?> <?php echo $tahun;?>"> Download <?php echo $row['title'];?> <?php echo $tahun;?>&lt;/a&gt;
                                                                &lt;a href=&quot;/search/?q=Download <?php echo $row['title'];?>"> Download <?php echo $row['title'];?>&lt;/a&gt;
                                                                &lt;a href=&quot;/search/?q=Download <?php echo $row['title'];?> <?php echo $tahun;?> full movie">Download <?php echo $row['title'];?> <?php echo $tahun;?> full movie&lt;/a&gt;
                                                                &lt;a href=&quot;/search/?q=Download <?php echo $row['title'];?> full movie">Download <?php echo $row['title'];?> full movie&lt;/a&gt;
                                                                &lt;a href=&quot;/search/?q=Download <?php echo $row['title'];?> <?php echo $tahun;?> free">Download <?php echo $row['title'];?> <?php echo $tahun;?> free&lt;/a&gt;
                                                                &lt;a href=&quot;/search/?q=Download <?php echo $row['title'];?> free">Download <?php echo $row['title'];?> free&lt;/a&gt;
                                                                &lt;a href=&quot;/search/?q=<?php echo $row['title'];?> <?php echo $tahun;?>"><?php echo $row['title'];?> <?php echo $tahun;?>&lt;/a&gt;
                                                                &lt;a href=&quot;/search/?q=<?php echo $keywords;?>"><?php echo $keywords;?>&lt;/a&gt;
                                                                &lt;a href=&quot;/search/?q=<?php echo $row[production_companies][0][name];?>"><?php echo $row[production_companies][0][name];?>&lt;/a&gt;
                                                                &lt;a href=&quot;/search/?q=<?php echo $genre;?>"><?php echo $genre;?>&lt;/a&gt;
                                                                &lt;a href=&quot;/search/?q=<?php echo $cast;?>"><?php echo $cast;?>&lt;/a&gt;
                                                                &lt;a href=&quot;/search/?q=<?php echo $row['overview'];?>"><?php echo $row['overview'];?>&lt;/a&gt;
                                                                <?php echo $row['title'];?> <?php echo $tahun;?>,<?php echo $row['overview'];?>,<?php echo $keywords;?>,<?php echo $row[production_companies][0][name];?>,<?php echo $genre;?>,<?php echo $cast;?>
                                                                </td>
							</tbody>
							</table>
<br>
					<table class="table table-striped">
						<thead><caption class="text-center">DESCRIPSI_OTO</caption></thead>
                                                <tbody>	
							<tr>
							<td class="DDD">
&lt;div class=&quot;separator&quot; style=&quot;clear: left; float: left; margin-bottom: 1em; margin-right: 1em;&quot;&gt;&lt;img alt=&quot;<?php echo $row['title'];?> <?php echo $tahun;?>&quot; border=&quot;0&quot; data-original-height=&quot;278&quot; data-original-width=&quot;185&quot; height=&quot;320&quot; src=&quot;<?php echo'https://image.tmdb.org/t/p/w185' .$row['poster_path'];?>&quot; title=&quot;<?php echo $row['title'];?> <?php echo $tahun;?>&quot; width=&quot;213&quot; /&gt;&lt;/div&gt;
&lt;h3&gt;<?php echo $row['title'];?> (<?php echo $tahun;?>)&lt;/h3&gt;
&lt;p&gt;Title : <?php echo $row['title'];?>&lt;br /&gt;
Release : <?php echo $row['release_date'];?>&lt;br /&gt;
Rating : <?php echo $vote_average;?>/10 by <?php echo $vote_count;?> users&lt;br /&gt;
Runtime : <?php echo $row['runtime'];?> min.&lt;br /&gt;
Companies : <?php echo $row[production_companies][0][name];?>&lt;br /&gt;
Country : <?php echo $country;?>&lt;br /&gt;
Language : <?php echo $languages;?>&lt;br /&gt;
Genre : <?php echo $genre;?>&lt;br /&gt;
Stars : <?php echo $cast;?>&lt;br /&gt;
Overview : <?php echo $row['overview'];?>&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;
&lt;center&gt;
&lt;a href=&quot;<?php echo $_ocim->home_url() .'/playmovie.php';?>&quot; style=&quot;-moz-border-radius: 28; -webkit-border-radius: 28; background-image: -moz-linear-gradient(top,#3cb0fd,#3498db); background-image: -ms-linear-gradient(top,#3cb0fd,#3498db); background-image: -o-linear-gradient(top,#3cb0fd,#3498db); background-image: -webkit-linear-gradient(top,#3cb0fd,#3498db); background-image: linear-gradient(to bottom,#3cb0fd,#3498db); background: #3cb0fd; border-radius: 28px; color: white; font-family: Arial; font-size: 20px; margin-right: 5px; padding: 10px 20px 10px 20px; text-decoration: none; text-shadow: 1px 1px 3px #666;&quot; target=&quot;_blank&quot;&gt;Watch Online &lt;/a&gt;&lt;/center&gt;&lt;br /&gt;&lt;br /&gt;&lt;center&gt;
&lt;a href=&quot;<?php echo $_ocim->home_url() .'/download.php';?>&quot; style=&quot;-moz-border-radius: 28; -webkit-border-radius: 28; background-image: -moz-linear-gradient(top,#3cb0fd,#3498db); background-image: -ms-linear-gradient(top,#3cb0fd,#3498db); background-image: -o-linear-gradient(top,#3cb0fd,#3498db); background-image: -webkit-linear-gradient(top,#3cb0fd,#3498db); background-image: linear-gradient(to bottom,#3cb0fd,#3498db); background: #3cb0fd; border-radius: 28px; color: white; font-family: Arial; font-size: 20px; margin-right: 5px; padding: 10px 20px 10px 20px; text-decoration: none; text-shadow: 1px 1px 3px #666;&quot; target=&quot;_blank&quot;&gt;Download HD &lt;/a&gt;
&lt;/center&gt;&lt;br /&gt;
&lt;center&gt;
&lt;img src=&quot;<?php echo'https://image.tmdb.org/t/p/w500' .$row['backdrop_path'];?>&quot; width=&#039;272.667&#039; height=&#039;144.617&#039; style=&#039;text-align:left&#039;&gt; 
&lt;img src=&quot;<?php echo'https://image.tmdb.org/t/p/w780' . $result['file_path'];?>&quot; width=&#039;272.667&#039; height=&#039;144.617&#039; style=&#039;text-align:right&#039;&gt;
&lt;/center&gt;&lt;br /&gt;
&lt;center&gt;&lt;h4 class=&quot;text-center media-heading&quot; style=&quot;text-align: center;&quot;&gt;<?php echo $row['title'];?> Official Teaser Trailer #1 <?php echo $tahun;?>&lt;/h4&gt;&lt;/center&gt;
&lt;center&gt;&lt;iframe src=&quot;//www.youtube.com/embed/<?php echo $row['trailers']['youtube'][0]['source'];?>?rel=0&amp;modestbranding=1&amp;autoplay=0&amp;autohide=1&amp;showinfo=1&amp;controls=0;" style="width:568px;height:320px">&lt;/iframe&gt;&lt;/center&gt;&lt;br /&gt;
&lt;center&gt;
&lt;a href=&quot;<?php echo $_ocim->home_url() .'/playmovie.php';?>&quot; style=&quot;-moz-border-radius: 28; -webkit-border-radius: 28; background-image: -moz-linear-gradient(top,#3cb0fd,#3498db); background-image: -ms-linear-gradient(top,#3cb0fd,#3498db); background-image: -o-linear-gradient(top,#3cb0fd,#3498db); background-image: -webkit-linear-gradient(top,#3cb0fd,#3498db); background-image: linear-gradient(to bottom,#3cb0fd,#3498db); background: #3cb0fd; border-radius: 28px; color: white; font-family: Arial; font-size: 20px; margin-right: 5px; padding: 10px 20px 10px 20px; text-decoration: none; text-shadow: 1px 1px 3px #666;&quot; target=&quot;_blank&quot;&gt;Watch Online &lt;/a&gt;&lt;/center&gt;&lt;br /&gt;&lt;br /&gt;&lt;center&gt;
&lt;a href=&quot;<?php echo $_ocim->home_url() .'/download.php';?>&quot; style=&quot;-moz-border-radius: 28; -webkit-border-radius: 28; background-image: -moz-linear-gradient(top,#3cb0fd,#3498db); background-image: -ms-linear-gradient(top,#3cb0fd,#3498db); background-image: -o-linear-gradient(top,#3cb0fd,#3498db); background-image: -webkit-linear-gradient(top,#3cb0fd,#3498db); background-image: linear-gradient(to bottom,#3cb0fd,#3498db); background: #3cb0fd; border-radius: 28px; color: white; font-family: Arial; font-size: 20px; margin-right: 5px; padding: 10px 20px 10px 20px; text-decoration: none; text-shadow: 1px 1px 3px #666;&quot; target=&quot;_blank&quot;&gt;Download HD &lt;/a&gt;
&lt;/center&gt;&lt;br /&gt;
Tag : <?php echo $row['title'];?>, <?php echo $row['original_title'];?>, Watch <?php echo $row['title'];?> <?php echo $tahun;?> Full Movie Online, <?php echo $row['title'];?> <?php echo $tahun;?> Full Movie Streaming Online in HD-720p Video Quality, <?php echo $row['title'];?> <?php echo $tahun;?> Full Movie, Where to Download <?php echo $row['title'];?> <?php echo $tahun;?> Full Movie ?, Watch <?php echo $row['title'];?> Full Movie, Watch <?php echo $row['title'];?> Full Movie Online, Watch <?php echo $row['title'];?> Full Movie HD 1080p, <?php echo $row['title'];?> <?php echo $tahun;?> Full Movie, Download <?php echo $row['title'];?> <?php echo $tahun;?>, <?php echo $row['title'];?> <?php echo $tahun;?>, <?php echo $keywords;?>&lt;/p&gt;
<br>



							</td></tr>
							</tbody>
							</table>
<br>

<div >
<img src="<?php echo'http://image.tmdb.org/t/p/w376' .$row['backdrop_path'];?>" class="img-responsive thumbnail" />                  
</div>