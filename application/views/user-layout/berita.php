	<main>
		<div class="page_header blog element_to_stick">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-7 col-md-7 d-none d-md-block">
						<h1>Semua Berita</h1>
					</div>
				</div>	       
			</div>
		</div>

		<div class="container margin_60_20">			
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="row">
						<?php foreach ($berita->articles as $news) : ?>
						<div class="col-md-6">
							<article class="blog">
								<figure>
									<a href="<?=$news->url?>" target="_blank"><img src="<?=$news->urlToImage?>" alt="">
										<div class="preview"><span>Read more</span></div>
									</a>
								</figure>
								<div class="post_info">
									<small><?= date('D, d-m-Y H:i', strtotime($news->publishedAt)) ?></small>
									<h2><a href="<?=$news->url?>" target="_blank"><?=$news->title?></a></h2>
									</p><?=character_limiter($news->description,50)?></p>
									<ul>
										<li>
											<div class="thumb"><img src="<?=base_url('')?>assets/img/avatar.jpg" alt=""></div> <?=$news->author?>
										</li>
										<li></li>
									</ul>
								</div>
							</article>
						</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</main>