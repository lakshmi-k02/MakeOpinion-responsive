<?php

      


// cURL-Aufruf
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://cmsweb:f6InX9k60A624zC7@cms-web.makeopinion.com/wp-json/wp/v2/categories');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// JSON-Daten in ein PHP-Array umwandeln
$data_categories = json_decode($response, true);

$categories = array();
foreach($data_categories as $data_categorie) {
      $categories[$data_categorie->id] = $data_categorie;
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://cmsweb:f6InX9k60A624zC7@cms-web.makeopinion.com/wp-json/wp/v2/users');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// JSON-Daten in ein PHP-Array umwandeln
$data_authors = json_decode($response, true);

$authors = array();
foreach($data_authors as $data_author) {
      $authors[$data_author['id']] = $data_author;
}






// Einstellungen für die WordPress-API
$base_url = 'https://cmsweb:f6InX9k60A624zC7@cms-web.makeopinion.com/wp-json/wp/v2/posts/'.$_GET['id'].'';

// API-Endpunkt für Artikel in einer Kategorie
$api_endpoint = $base_url;

// cURL-Aufruf
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// JSON-Daten in ein PHP-Array umwandeln
$data_content = json_decode($response, true);

if($data_content['slug'] != $_GET['test']) {
      header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
      header("Cache-Control: post-check=0, pre-check=0", false);
      header("Pragma: no-cache");
      header("Expires: 0");
      
      // Setzen des 301-Redirects
      header("Location: https://www.makeopinion.com/en/blog/".$_GET['id']."/".$data_content['slug']."/", true, 301);
      exit();	
}
      
      ?>
<?php include('header.php'); ?>
<style>h4{font-size: 24px!important}</style>





      <section class="blog-details-section wf-section">
         <div class="contact-page-container w-container">
            <div class="blog-details-main-block">
               <div class="category-and-date-block">
                  <div class="category position radius">
                     <div class="category-type-block"><?php echo $categories[$data_content['categories'][0]]['name'];?></div>
                  </div>
                  <div class="category position radius date">
                     <div class="category-type-block date-of-post"><?php echo date('F j, Y',strtotime($data_content['modified']));?></div>
                  </div>
               </div>
               <div class="blog-detail">
                  <h1 class="blog-caption-heading change-header-one"><?php echo $data_content['title']['rendered'];?></h1>
                  <div class="blog-image" style="text-align: center">
                              <?php 
                                    if($data_content['featured_media'] != 0) { 
                                    $base_url = 'https://cmsweb:f6InX9k60A624zC7@cms-web.makeopinion.com/wp-json/wp/v2/media/'.$data_content['featured_media'] .'';
                                    
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
                              ?>
                                      <img src="<?php echo $image2;?>" style="max-height: 400px">
                        <img style="display: none" loading="lazy" src="https://assets.website-files.com/6440fdfbffaac190cd4431d9/644a4ab73bb5304066927a6b_Blog%20Image06.webp" alt="" sizes="(max-width: 479px) 94vw, (max-width: 767px) 96vw, (max-width: 991px) 97vw, (max-width: 1439px) 98vw, 1290px" srcset="https://assets.website-files.com/6440fdfbffaac190cd4431d9/644a4ab73bb5304066927a6b_Blog%20Image06-p-500.webp 500w, https://assets.website-files.com/6440fdfbffaac190cd4431d9/644a4ab73bb5304066927a6b_Blog%20Image06-p-800.webp 800w, https://assets.website-files.com/6440fdfbffaac190cd4431d9/644a4ab73bb5304066927a6b_Blog%20Image06-p-1080.webp 1080w, https://assets.website-files.com/6440fdfbffaac190cd4431d9/644a4ab73bb5304066927a6b_Blog%20Image06-p-1600.webp 1600w, https://assets.website-files.com/6440fdfbffaac190cd4431d9/644a4ab73bb5304066927a6b_Blog%20Image06-p-2000.webp 2000w, https://assets.website-files.com/6440fdfbffaac190cd4431d9/644a4ab73bb5304066927a6b_Blog%20Image06.webp 2600w" class="autofit"></div>

                              <?php
                              } ?>
                  <div class="post-details-block">
                     <div class="author-details">
                        <div class="author radius"><img loading="lazy" width="50" height="50" src="https://assets.website-files.com/6440fdfbffaac190cd4431d9/644a750acca2d94c67695373_Ketty%20Gomez.png" alt="" class="autofit"></div>
                        <div class="author-name">
                           <p class="no-margin">Published By</p>
                           <div class="header-small heading-small"><?php echo $authors[$data_content['author']]['name'];?></div>
                        </div>
                     </div>
                     <div class="subject-details">
                        <div class="subject-icon"><img src="https://assets.website-files.com/64180342570b0dc26c6fd2d1/6440b418f3e5b64ce1988e2e_Group%201960.svg" loading="lazy" alt="Statistic Icon"></div>
                        <div class="subject-name">
                           <p class="no-margin">Subject</p>
                           <div class="header-small heading-small">Software</div>
                        </div>
                     </div>
                     <div class="comments">
                        <div class="comment-icon"><img src="https://assets.website-files.com/64180342570b0dc26c6fd2d1/6440b418f3e5b64adc988e2d_Group%201961.svg" loading="lazy" alt="Comment Icon"></div>
                        <div class="comment-details">
                           <p class="no-margin">Chat</p>
                           <div class="header-small heading-small">1 Comment</div>
                        </div>
                     </div>
                  </div>
                  <div class="w-richtext">
	                  <?php
				  	$data_content['content']['rendered'] = str_replace('https://cms-web.makeopinion.com/wp-content/', 'https://static-blog.makeopinion.com/', $data_content['content']['rendered']);

                    echo $data_content['content']['rendered'];?>                     
                  </div>
               </div>
            </div>
         </div>
      </section>
<?php include('footer.php'); ?>
