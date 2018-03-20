<?php $this->load->view('dashboard/header');
$this->load->view('dashboard/sidebar');

?>
            <article class="content forms-page">
              <section>
                <div class="content">
                    <div class="row">
                      <div class="col-md-12">

                        <div class="card">
                          <div class="card-header hd-box" data-background-color="blue">
                            <h4 class="title">Message Box</h4>
                          </div>

                          <div class="card-content">
                            <div class="row">
                              <div class="col-sm-12">
                              <div class="msg-create-key">
                                <div class="msg-create-heading">
                                  <h4>Message Box</h4>
                                </div>
                                <!-- Form Start -->
                                <div class="row">
                                  <div class="col-md-12">
                                     <table id="t01">
                                <tr>
                                  <th>S.No</th>
                                  <th>Subject</th>
                                  <th>Invoice</th>
                                  <th>Message Date</th>
                                </tr>
                                <?php //print_r($messagelist); 
                                $i=1;
                                foreach ($messagelist as $result) {
                                
                                ?>
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $result->subject;?></td>
                                            <td><?php echo $result->invoice;?></td>
                                            <td><?php echo date('d-M-Y h:i:s',strtotime($result->created_date))?></td>
                                        </tr>
                                        <?php $i++;}?>
                                       <!--  <tr>

                                            <td>2</td>
                                            <td>Token 02</td>
                                            <td>0.123</td>
                                        </tr>
                                        <tr>

                                            <td>3</td>
                                            <td>Token 03</td>
                                            <td>0.123</td>
                                        </tr>
                                        <tr>

                                            <td>4</td>
                                            <td>Token 04</td>
                                            <td>0.124</td>
                                        </tr> -->
                                      </table>
                                  </div>
                               <!--   <div class="col-sm-12">
                                    <p>Click on the buttons inside the tabbed menu:-</p>
                                    <div class="my-msg-tab">
                                      <div class="my-tab-msg">
                                        <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Thousands Now Adware </button>
                                        <button class="tablinks" onclick="openCity(event, 'Paris')">Thousands Now Adware </button>
                                        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Thousands Now Adware </button>
                                        <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Thousands Now Adware</button>
                                        <button class="tablinks" onclick="openCity(event, 'Paris')">Thousands Now Adware </button>
                                        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Thousands Now Adware </button>
                                      </div>

                                      <div id="London" class="msg-tabcontent">
                                          <div class="m-heading">
                                            <h3>Beautiful memories & my love</h3>
                                          </div>
                                          <div class="m-p-text">
                                            <p>In the hearr of the French Alps, in the north east of the Rhone Alps  region lies the village of Les Houches. Nestled at one end of the Chamonixx valley in the Mont Blance region of the Haute Savoie Les.</p>
                                            <p>Houches had long been the consirdered a mere satellite village of its much more illustrious neighbour Chamonix - the worl capital of skiing and mountaineering.</p>
                                            <p>Houches had long been the consirdered a mere satellite village of its much more illustrious neighbour Chamonix - the worl capital of skiing and mountaineering.</p>
                                            <p>Houches had long been the consirdered a mere satellite village of its much more illustrious neighbour Chamonix - the worl capital of skiing and mountaineering.</p>
                                          </div>

                                      </div>

                                      <div id="Paris" class="msg-tabcontent">
                                        <div class="m-heading">
                                            <h3>Where we go?</h3>
                                          </div>
                                          <div class="m-p-text">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                          </div>
                                      </div>

                                      <div id="Tokyo" class="msg-tabcontent">
                                        <div class="m-heading">
                                            <h3>Beautiful memories & my love</h3>
                                          </div>
                                          <div class="m-p-text">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                          </div>
                                      </div>
                                    </div>
                                      <script>
                                      function openCity(evt, cityName) {
                                          var i, tabcontent, tablinks;
                                          tabcontent = document.getElementsByClassName("msg-tabcontent");
                                          for (i = 0; i < tabcontent.length; i++) {
                                              tabcontent[i].style.display = "none";
                                          }
                                          tablinks = document.getElementsByClassName("tablinks");
                                          for (i = 0; i < tablinks.length; i++) {
                                              tablinks[i].className = tablinks[i].className.replace(" active", "");
                                          }
                                          document.getElementById(cityName).style.display = "block";
                                          evt.currentTarget.className += " active";
                                      }

                                      
                                      document.getElementById("defaultOpen").click();
                                      </script>

                                  </div> -->
                                    <!-- Form End -->
                                  </div>
                                </div>
                                <!-- Form End -->
                              </div>


                              </div>

                            </div>
                          </div>

                        </div>

                      </div>
                    </div>
                </div>
              </section>
            </article>

   <?php $this->load->view('dashboard/footer');?>