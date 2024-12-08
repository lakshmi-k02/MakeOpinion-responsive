<?php include('header.php'); 
// cURL-Aufruf


$filter_category = '';

if(isset($_GET['category_id']) && is_numeric($_GET['category_id']) && $_GET['category_id'] > 0) {
	$filter_category = '&categories='.$_GET['category_id'].'';
}
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://cmsweb:f6InX9k60A624zC7@cms-web.makeopinion.com/wp-json/wp/v2/posts?status=publish'.$filter_category.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// JSON-Daten in ein PHP-Array umwandeln
$artikels = json_decode($response, true);

	
	
	
	$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://cmsweb:f6InX9k60A624zC7@cms-web.makeopinion.com/wp-json/wp/v2/categories');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// JSON-Daten in ein PHP-Array umwandeln
$data_categories = json_decode($response, true);

$categories = array();
foreach($data_categories as $data_categorie) {
      $categories[$data_categorie['id']] = $data_categorie;
}
?>

<section class="blog-page-hero-section blog-two wf-section" style="padding-top: 100px; background-color: #f9fafb;">      
      <div class="blogs-section blog-page-two wf-section">
         <div class="contact-page-container w-container">
            <div class="blog-main-block">
               <h2 class="blog-heading caps">Recent blog articles</h2>
               <div class="w-dyn-list">
                  <div role="list" class="blog-two-list-two w-dyn-items">
                     
                     <?php foreach($artikels as $artikel) {
	                     
					 				if($artikel['featured_media'] != 0) { 
	                                    $base_url = 'https://cmsweb:f6InX9k60A624zC7@cms-web.makeopinion.com/wp-json/wp/v2/media/'.$artikel['featured_media'] .'';
	                                    
	                                    // API-Endpunkt für Artikel in einer Kategorie
	                                    $api_endpoint = $base_url;
	                                    
	                                    // cURL-Aufruf
	                                    $ch = curl_init();
	                                    curl_setopt($ch, CURLOPT_URL, $api_endpoint);
	                                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	                                    $response = curl_exec($ch);
	                                    curl_close($ch);
	                                    
	                                    // JSON-Daten in ein PHP-Array umwandeln
	                                    $image = json_decode($response, true);
	                                    if(isset($image['media_details']['sizes']['large'])) {
	                                    	$image2 = $image['media_details']['sizes']['large']['source_url'] = str_replace('https://cms-web.makeopinion.com/wp-content/', 'https://static-blog.makeopinion.com/', $image['media_details']['sizes']['large']['source_url']);
	                                          
	                                    } else {
	                                    	$image2 = $image['media_details']['sizes']['medium_large']['source_url'] = str_replace('https://cms-web.makeopinion.com/wp-content/', 'https://static-blog.makeopinion.com/', $image['media_details']['sizes']['medium_large']['source_url']);
	                                          
	                                    }
                                    
                                    }
                                    
                                    
                                    
                                    
                                    
                                    
	                      ?>
					 		<!-- This is the structure of an article link, we should populate this with all articles -->               
		                     <div role="listitem" class="w-dyn-item">
		                        <div id="w-node-e7ca6b6e-b6a6-b289-707e-6b19f233a5d8-2aec47c8" class="news no-radius">
		                           <!-- Link to article details here -->
		                           <a href="https://www.makeopinion.com/en/blog/<?php echo $artikel['id'];?>/<?php echo $artikel['slug'];?>/">
		                           <div class="news-image">
		                                 <!-- Article Image here -->
		                                 <img loading="lazy" src="<?php echo $image2;?>" alt="" class="news-picture">
		                           </div>
		                           </a>
		                           
		                           <div class="news-details blog-text news-three">
		                              <a href="https://www.makeopinion.com/en/blog/<?php echo $artikel['id'];?>/<?php echo $artikel['slug'];?>/" style="text-decoration: none">
		                                    <div class="bold-text tech-headings blog"><?php echo $artikel['title']['rendered'];?></div>
		                              </a>
		                              <div class="date-and-arrow-block no-padding">
		                                 <div class="publisg-date no-bg">
		                                    <!-- Article date here -->
		                                    <p class="date-block"><?php echo date('F d,Y',strtotime($artikel['date']));?></p>
		                                 </div>
		                                 <!-- Link to article detailed here -->
		                                 <a href="https://www.makeopinion.com/en/blog/<?php echo $artikel['id'];?>/<?php echo $artikel['slug'];?>/" class="w-inline-block"><div class="arrow-link"><img src="https://makeopinion.com/en/assets/images_new/arrow.svg" loading="lazy" alt="Arrow"></div></a>
		                              </div>
		                           </div>
		                           <div class="category">
		                              <!-- Link to all articles in a category. maybe a parameter to this page that is the category? -->
		                              <div class="category-type-block"><a style="color:#fff;text-decoration:none" href="/en/categories/<?php echo $artikel['categories'][0];?>/<?php echo $categories[$artikel['categories'][0]]['slug'];?>/"><?php echo $categories[$artikel['categories'][0]]['name'];?></a></div>
		                           </div>
		                        </div>
		                     </div>
		
		
                     
	                     
                     <?php } ?>
	                     
                        
                  </div>
               </div>
            </div>
         </div>
      </div>
</section>
<?php include('footer.php'); ?>
