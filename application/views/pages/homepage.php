


<div class="carousel">
	<div class="row">
		<div class="col-sm-12">
			<div id="demo" class="carousel slide" data-ride="carousel">
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
					<li data-target="#demo" data-slide-to="3"></li>
					<li data-target="#demo" data-slide-to="4"></li>
					<li data-target="#demo" data-slide-to="5"></li>
				</ul>

			<div class="carousel-inner">
            <?php foreach($posts as $post) : ?>
				<div class="carousel-item active">
					<img src="<?php echo base_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
                </div>
            <?php endforeach; ?>


				 <a class="carousel-control-prev" href="#demo" data-slide="prev">
					     <span class="carousel-control-prev-icon"></span>
					       </a>
					         <a class="carousel-control-next" href="#demo" data-slide="next">
							     <span class="carousel-control-next-icon"></span>
						  </a>
			</div>
			</div>
		</div>
	</div>
    </div>

        <div class="row">

			<div class="col-sm-9">
                <div class="news-today">
                    <h3> Today's News</h3>
				<div class="card-deck">
					<div class="row">	
                    <?php foreach($posts as $post) : ?>	
							<div class="col-sm-4">
                            
								<div class="card">
                                
									<img class="card-img-top" src="<?php echo base_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>"> 
                             
									<div class="card-body">
 									<a href="<?php echo site_url('/posts/' . $post['slug']); ?>" class="stretched-link">
										<p class="card-text">
                                            <?php echo word_limiter($post['body'], 40); ?>
										</p>
									</a>
									</div>
                                </div>
                            
                               </div>
                               <?php endforeach; ?>
                              </div>
								<div class="row">
						
                        </div>
								<div class="row">
								<div class="col-sm-4">
								
                                </div>
                                <div class="col-sm-4">
								
                                </div>
                                <div class="col-sm-4">
								
								</div>
								</div>
							</div>
            </div>
        
            <div class="editor">
                <h3> Editor's Picks</h3>
                <div class="owl-carousel">
                    <h3> sample text</h3>
                    
                    </div>

</div>
</div>

<div class="col-sm-3">               
        <div class="container">
            <div class="poll">
                <h3>Poll</h3>
            </div>
        </div>
        
        <div class="tradingview-widget-container">
              <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/markets/stocks-india/" rel="noopener" target="_blank"><span class="blue-text">Stock Quotes</span></a> by TradingView</div>
                  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                      {
                            "title": "Stocks",
                              "tabs": [
                                  {
                                            "title": "Financial",
                                      "symbols": [
                                          {
                                                        "s": "NYSE:JPM",
                                                        "d": "Jpmorgan Chase & Co"
                                                      
                                          },
                                          {
                                                        "s": "NYSE:WFC",
                                                        "d": "Wells Fargo Co New"
                                                      
                                          },
                                          {
                                                        "s": "NYSE:BAC",
                                                        "d": "Bank Amer Corp"
                                                      
                                          },
                                          {
                                                        "s": "NYSE:HSBC",
                                                        "d": "Hsbc Hldgs Plc"
                                                      
                                          },
                                          {
                                                        "s": "NYSE:C",
                                                        "d": "Citigroup Inc"
                                                      
                                          },
                                          {
                                                        "s": "NYSE:MA",
                                                        "d": "Mastercard Incorporated"
                                                      
                                          }
                                                
                                      ]
                                          
                                  },
                                  {
                                            "title": "Technology",
                                      "symbols": [
                                          {
                                                        "s": "NASDAQ:AAPL",
                                                        "d": "Apple"
                                                      
                                          },
                                          {
                                                        "s": "NASDAQ:GOOGL",
                                                        "d": "Google Inc"
                                                      
                                          },
                                          {
                                                        "s": "NASDAQ:MSFT",
                                                        "d": "Microsoft Corp"
                                                      
                                          },
                                          {
                                                        "s": "NASDAQ:FB",
                                                        "d": "Facebook Inc"
                                                      
                                          },
                                          {
                                                        "s": "NYSE:ORCL",
                                                        "d": "Oracle Corp"
                                                      
                                          },
                                          {
                                                        "s": "NASDAQ:INTC",
                                                        "d": "Intel Corp"
                                                      
                                          }
                                                
                                      ]
                                          
                                  },
                                  {
                                            "title": "Services",
                                      "symbols": [
                                          {
                                                        "s": "NASDAQ:AMZN",
                                                        "d": "Amazon Com Inc"
                                                      
                                          },
                                          {
                                                        "s": "NYSE:BABA",
                                                        "d": "Alibaba Group Hldg Ltd"
                                                      
                                          },
                                          {
                                                        "s": "NYSE:T",
                                                        "d": "At&t Inc"
                                                      
                                          },
                                          {
                                                        "s": "NYSE:WMT",
                                                        "d": "Wal-mart Stores Inc"
                                                      
                                          },
                                          {
                                                        "s": "NYSE:CHL",
                                                        "d": "China Mobile Limited"
                                                      
                                          },
                                          {
                                                        "s": "NYSE:V",
                                                        "d": "Visa Inc"
                                                      
                                          }
                                                
                                      ]
                                          
                                  }
                                    
                              ],
                                "width": 400,
                                "height": 660,
                                "showChart": true,
                                "locale": "in",
                                "plotLineColorGrowing": "rgba(33, 150, 243, 1)",
                                "plotLineColorFalling": "rgba(33, 150, 243, 1)",
                                "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
                                "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
                                "gridLineColor": "#F0F3FA",
                                "scaleFontColor": "rgba(120, 123, 134, 1)",
                                "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
                                "colorTheme": "light"
                          
                      }
                        </script>
        </div>
        

        
</div>
</div> -