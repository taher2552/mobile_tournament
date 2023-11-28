<section class="main-banner--sec">
  <div class="container-fluid container-space">
    <div class="top-banner">
      <a href="assets/images/TD-banner-img.jpg" data-fancybox="gallery0">
        <img src="https://res.cloudinary.com/cloud2cdn/image/upload/bookmyplayer/league/<?=$d->id?>/<?=$d->banner?>" alt="" /></a>
    </div>
    <div class="banner-clublogo">
      <div class="large-clublogo">
        <div class="large-clublogo--bg">
          <img src="https://res.cloudinary.com/cloud2cdn/image/upload/bookmyplayer/league/<?=$d->id?>/<?=$d->logo?>" alt="" />
        </div>
        <div class="banner-heading-section">
          <div class="banner-club--headings">
            <h1><?=$d->name?></h1>
            <span><?=$d->sport?></span>
          </div>
          <div class="start-end--dates">
            <div class="start-date--details">
              <p>start date</p>
              <ul>
                <li class="red-calender">Sun, 15th Oct, 2023</li>
                <li class="red-watch">11:10 AM</li>
              </ul>
            </div>
            <div class="end-date--details">
              <p>end date</p>
              <ul>
                <li class="red-calender">Tue, 25th Oct, 2023</li>
                <li class="red-watch">5:30 PM</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="pv-sec">
      <a href="https://res.cloudinary.com/cloud2cdn/image/upload/bookmyplayer/league/<?=$d->id?>/<?=$d->banner?>" data-fancybox="gallery0">Photos(20)</a>
      <a href="#">Videos(8)</a>
    </div>
  </div>
</section>

<section class="main-content--sec">
  <div class="tournament-details--sec">
    <div class="card content-tab">
      <div class="card content-tab">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
              type="button" role="tab" aria-controls="nav-profile" aria-selected="true">
              profile
            </button>
            <button class="nav-link" id="nav-fixture-tab" data-bs-toggle="tab" data-bs-target="#nav-fixture"
              type="button" role="tab" aria-controls="nav-fixture" aria-selected="false">
              fixture & results
            </button>
            <button class="nav-link" id="nav-standings-tab" data-bs-toggle="tab" data-bs-target="#nav-standings"
              type="button" role="tab" aria-controls="nav-standings" aria-selected="false">
              standings
            </button>
            <button class="nav-link" id="nav-champions-tab" data-bs-toggle="tab" data-bs-target="#nav-champions"
              type="button" role="tab" aria-controls="nav-champions" aria-selected="false">
              champions
            </button>
            <button class="nav-link" id="nav-photos--tab" data-bs-toggle="tab" data-bs-target="#nav-photos--videos"
              type="button" role="tab" aria-controls="nav-photos--videos" aria-selected="false">
              photos & videos
            </button>
          </div>
        </nav>
        <div class="tab-content--bg container-fluid container-space">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade active show" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-3">
                    <div class="fees-box">
                      <h4>basic Info</h4>
                      <hr />
                      <ul>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/state.svg" alt="" /> Level : State
                        </li>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/sports-football.svg" alt="" /> sports : <?=ucfirst($d->sport);?>
                        </li>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/category.svg" alt="" /> Category : <?=ucfirst($d->category);?>
                        </li>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/t-id.svg" alt="" /> tournament ID : <?=$d->id?>
                        </li>
                      </ul>
                    </div>
                    <div class="rank-box">
                      <h4>Football Rank Pyramid</h4>
                      <hr />
                      <p>Top-tier National Leagues</p>
                      <ul>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/isl.svg" alt="" /> indian super league
                        </li>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/il.svg" alt="" /> i-league
                        </li>
                      </ul>
                      <p>National and Regional Competitions</p>
                      <ul>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/il2.svg" alt="" /> i-league 2
                        </li>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/il3.svg" alt="" /> i-league 3
                        </li>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/isl2.svg" alt="" /> Indian state leagues
                        </li>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/st.svg" alt="" /> santosh trophy
                        </li>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/ifa.svg" alt="" /> IFA shield
                        </li>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/nfl.svg" alt="" /> National football league
                        </li>
                      </ul>
                      <p>women’s football</p>
                      <ul>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/iwl.svg" alt="" /> indian women’s league
                        </li>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/afc.svg" alt="" /> AFC women asian cup
                        </li>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/saff.svg" alt="" /> SAFF Women’s championship
                        </li>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/fc.svg" alt="" /> federation cup
                        </li>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/ac.svg" alt="" /> AFC asian cup
                        </li>
                      </ul>
                      <p>cup competitions and local leagues</p>
                      <ul>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/cfl.svg" alt="" /> calcutta football league
                        </li>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/sc.svg" alt="" /> super cup
                        </li>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/yl.svg" alt="" /> youth league
                        </li>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/msl.svg" alt="" /> manipur state league
                        </li>
                      </ul>
                      <p>other continental tournaments</p>
                      <ul>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/cgc.svg" alt="" /> concacaf gold cup
                        </li>
                      </ul>
                    </div>
                    <div class="arena-box">
                      <h4>tournament arena location</h4>
                      <hr />
                      <p>Herkley sports center</p>
                      <div class="arena-map">
                        <iframe
                          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58904.386800901964!2d88.3610016150229!3d22.671522852404127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89db5d620f749%3A0x3bde582cc60dee4f!2sAparna%20Cricket%20Academy%20%7C%20Cricket%20Academy%20in%20North%20Kolkata!5e0!3m2!1sen!2sin!4v1701023120065!5m2!1sen!2sin"
                          width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                          referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </div>
                    </div>
                    <div class="review-box">
                      <div class="line-review">
                        <div class="review">
                          <span class="icon-container">5</span>
                          <div class="progress">
                            <div class="progress-done" data-done="68"></div>
                          </div>
                          <span class="percent"></span>
                        </div>
                        <div class="review">
                          <span class="icon-container">4</span>
                          <div class="progress">
                            <div class="progress-done" data-done="13"></div>
                          </div>
                          <span class="percent"></span>
                        </div>
                        <div class="review">
                          <span class="icon-container">3</span>
                          <div class="progress">
                            <div class="progress-done" data-done="9"></div>
                          </div>
                          <span class="percent"></span>
                        </div>
                        <div class="review">
                          <span class="icon-container">2</span>
                          <div class="progress">
                            <div class="progress-done" data-done="3"></div>
                          </div>
                          <span class="percent"></span>
                        </div>
                        <div class="review">
                          <span class="icon-container">1</span>
                          <div class="progress">
                            <div class="progress-done" data-done="7"></div>
                          </div>
                          <span class="percent"></span>
                        </div>
                      </div>
                      <div class="star-reviews">
                        <span>4.5</span>
                        <div class="Stars" style="--rating: 4.5" aria-label="Rating of this product is 4.5 out of 5.">
                        </div>
                        <p>50 reviews</p>
                      </div>
                    </div>
                    <div class="prize-box">
                      <h4>prize details</h4>
                      <hr />
                      <ul>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/gold-prize.svg" alt="" /> <span>1st prize</span> : 6 feet trophy
                        </li>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/silver-prize.svg" alt="" /> <span>2nd prize</span> : 4 feet trophy
                        </li>
                        <li>
                          <img src="<?=base_url(); ?>asset1/images/bronze-prize.svg" alt="" /> <span>3rd prize</span> : 2 feet trophy
                        </li>
                      </ul>
                    </div>
                    <div class="verified-box">
                      <h4>organizers info</h4>
                      <hr />
                      <ul>
                        <li>vinay.chopra@rpsg.in</li>
                        <li>+91 7412589325</li>
                        <li>https://www.kjacademy.com</li>
                      </ul>
                    </div>
                    <div class="guest-box">
                      <h4>chief guest</h4>
                      <hr />
                      <ul>
                        <li><img src="<?=base_url(); ?>asset1/images/guest-img.png" alt=""></li>
                        <li>KP Sagar Agarwal</li>
                      </ul>
                    </div>
                    <div class="sponsors-box">
                      <h4>sponsors</h4>
                      <hr />
                      <ul>
                        <li><img src="<?=base_url(); ?>asset1/images/hero.svg" alt=""></li>
                        <li><img src="<?=base_url(); ?>asset1/images/nivia.svg" alt=""></li>
                        <li><img src="<?=base_url(); ?>asset1/images/virtua.svg" alt=""></li>
                      </ul>
                    </div>
                    <div class="timer-box">
                      <h4>time left for tournament</h4>
                      <hr />
                      <time class="countdown" date-time="2023-12-25 00:00:00" style="--accent: #17479E"></time>
                    </div>
                  </div>
                  <div class="col-lg-9">
                    <div class="introduction-box">
                      <div class="introduction-heading">
                        <h3>Introduction to <?=$d->name?></h3>
                      </div>
                      <hr />
                      <ul>
                        <li><?=$d->introduction?></li>

                      </ul>
                      <p>
                        Format and Participants
                      </p>
                      <ul>
                        <li>The tournament is contested by state associations and government institutions.</li>
                        <li>Held annually with eligible teams divided into zones for qualifying rounds.</li>
                      </ul>
                      <p>Format Changes</p>
                      <ul>
                        <li>Until 2018, the tournament was an individual competition, but since 2021, it is the men's
                          senior tier of the National
                          Football Championship.</li>
                      </ul>
                    </div>
                    <div class="pathway-box">
                      <div class="pathway-heading">
                        <h3>Your Pathway to <?=$d->name?></h3>
                      </div>
                      <hr />
                      <ul>
                        <li><?=$d->pathway?></li>
                      </ul>
                      <p>
                        Qualifying Factor
                      </p>
                      <ul>
                        <li>To qualify for the Santosh Trophy, teams must play in the qualifying round and be divided
                          into zones. </li>
                        <li>The teams are then divided into groups of three or four. The winners from each group,
                          along with four seeded teams, are drawn together. These 12 teams are then divided into
                          groups of three.</li>
                        <li>The six group winners and three best runners-up qualify for the final round of the
                          tournament. The final round is hosted in a central venue that rotates between the five zones
                          (North, South, East, West,
                          North-east). The two qualified teams from the zone that hosts the finals win the right to
                          host the finals.</li>
                      </ul>
                      <p>Pathway</p>
                      <ul>
                        <li>State camp trial (Direct)</li>
                        <li>District tournament(Inter school/Inter college tournament) (Indirect)</li>
                      </ul>
                    </div>
                    <div class="advantage-box">
                      <div class="advantage-heading">
                        <h3>Advantages in playing the Santosh Trophy</h3>
                      </div>
                      <hr />
                      <ul>
                        <li>Indirect Scouting</li>
                        <li>Railway Sports Quota Vacancies-Group C, Group D Posts</li>
                        <li>Banking Jobs(Sports Quota)</li>
                        <li>Police Jobs(Constable, Subinspector, etc)</li>
                        <li>Defence Jobs</li>
                      </ul>
                    </div>
                    <div class="gallery-tab border">
                      <div class="inner-gallery--tab">
                        <nav>
                          <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-photos-tab" data-bs-toggle="tab"
                              data-bs-target="#nav-photos" type="button" role="tab" aria-controls="nav-photos"
                              aria-selected="true">
                              Photos(20)
                            </button>
                            <button class="nav-link" id="nav-video-tab" data-bs-toggle="tab"
                              data-bs-target="#nav-video" type="button" role="tab" aria-controls="nav-video"
                              aria-selected="false">
                              Videos(8)
                            </button>
                            <button class="nav-link" id="nav-training-tab" data-bs-toggle="tab"
                              data-bs-target="#nav-training" type="button" role="tab" aria-controls="nav-training"
                              aria-selected="false">
                              Training Ground Photos
                            </button>
                            <button class="nav-link" id="nav-tournaments-tab" data-bs-toggle="tab"
                              data-bs-target="#nav-tournaments" type="button" role="tab"
                              aria-controls="nav-tournaments" aria-selected="false">
                              Tournaments
                            </button>
                          </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade active show" id="nav-photos" role="tabpanel"
                            aria-labelledby="nav-photos-tab">
                            <div class="photo-gellary">
                              <ul>
                                <li>
                                  <div class="academy-gellery">
                                    <a href="assets/images/p1.jpg" data-fancybox="gallery0">
                                      <img src="<?=base_url(); ?>asset1/images/p1.jpg" />
                                    </a>
                                  </div>
                                </li>
                                <li>
                                  <div class="academy-gellery">
                                    <a href="assets/images/p2.jpg" data-fancybox="gallery0">
                                      <img src="<?=base_url(); ?>asset1/images/p2.jpg" />
                                    </a>
                                  </div>
                                </li>
                                <li>
                                  <div class="academy-gellery">
                                    <a href="assets/images/p3.jpg" data-fancybox="gallery0">
                                      <img src="<?=base_url(); ?>asset1/images/p3.jpg" />
                                    </a>
                                  </div>
                                </li>
                                <li>
                                  <div class="academy-gellery">
                                    <a href="assets/images/p4.jpg" data-fancybox="gallery0">
                                      <img src="<?=base_url(); ?>asset1/images/p4.jpg" />
                                    </a>
                                  </div>
                                </li>
                                <li>
                                  <div class="academy-gellery">
                                    <a href="assets/images/p1.jpg" data-fancybox="gallery0">
                                      <img src="<?=base_url(); ?>asset1/images/p1.jpg" />
                                    </a>
                                  </div>
                                </li>
                                <li>
                                  <div class="academy-gellery">
                                    <a href="assets/images/p2.jpg" data-fancybox="gallery0">
                                      <img src="<?=base_url(); ?>asset1/images/p2.jpg" />
                                    </a>
                                  </div>
                                </li>
                                <li>
                                  <div class="academy-gellery">
                                    <a href="assets/images/p3.jpg" data-fancybox="gallery0">
                                      <img src="<?=base_url(); ?>asset1/images/p3.jpg" />
                                    </a>
                                  </div>
                                </li>
                                <li>
                                  <div class="academy-gellery">
                                    <a href="assets/images/p4.jpg" data-fancybox="gallery0">
                                      <img src="<?=base_url(); ?>asset1/images/p4.jpg" />
                                    </a>
                                  </div>
                                </li>
                                <li>
                                  <div class="academy-gellery">
                                    <a href="assets/images/p1.jpg" data-fancybox="gallery0">
                                      <img src="<?=base_url(); ?>asset1/images/p1.jpg" />
                                    </a>
                                  </div>
                                </li>
                                <li>
                                  <div class="academy-gellery">
                                    <a href="assets/images/p2.jpg" data-fancybox="gallery0">
                                      <img src="<?=base_url(); ?>asset1/images/p2.jpg" />
                                    </a>
                                  </div>
                                </li>
                                <li>
                                  <div class="academy-gellery">
                                    <a href="assets/images/p3.jpg" data-fancybox="gallery0">
                                      <img src="<?=base_url(); ?>asset1/images/p3.jpg" />
                                    </a>
                                  </div>
                                </li>
                                <li>
                                  <div class="academy-gellery">
                                    <a href="assets/images/p4.jpg" data-fancybox="gallery0">
                                      <img src="<?=base_url(); ?>asset1/images/p4.jpg" />
                                    </a>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="nav-video" role="tabpanel" aria-labelledby="nav-video-tab">
                            <div class="photo-gellary">
                              <ul>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p1.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p2.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p3.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p4.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p1.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p2.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p3.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p4.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p1.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p2.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p3.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p4.jpg" alt="" />
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="nav-training" role="tabpanel"
                            aria-labelledby="nav-training-tab">
                            <div class="photo-gellary">
                              <ul>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p1.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p2.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p3.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p4.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p1.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p2.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p3.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p4.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p1.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p2.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p3.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p4.jpg" alt="" />
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="nav-tournaments" role="tabpanel"
                            aria-labelledby="nav-tournaments-tab">
                            <div class="photo-gellary">
                              <ul>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p1.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p2.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p3.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p4.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p1.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p2.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p3.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p4.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p1.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p2.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p3.jpg" alt="" />
                                </li>
                                <li>
                                  <img src="<?=base_url(); ?>asset1/images/p4.jpg" alt="" />
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="rules-box">
                      <div class="rules-heading">
                        <h3>rules & regulations</h3>
                      </div>
                      <hr />
                      <ul>
                        <li>For age categories, players need to produce valid age proofs (passport/Aadhar/birth
                          certificate)</li>
                        <li>10 mins each side 2 mins break</li>
                        <li>We our partners are not responsible for any player injuries or health issues during the
                          event</li>
                        <li>Players need to take care of their belongings and Events Bangalore is not responsible for
                          any loss of baggage during the event</li>
                        <li>Match officials have the final say on all decisions on the ground Repeated offences
                          will result in match forfeit and termination from the event.</li>
                      </ul>
                    </div>
                    <div class="group-play--details">
                      <div class="play-table--heading">
                        <h3>group A</h3>
                      </div>
                      <div class="play-table">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col" class="text-center">#</th>
                              <th scope="col" class="w-25 text-left">Club Name</th>
                              <th scope="col" class="text-center">P</th>
                              <th scope="col" class="text-center">W</th>
                              <th scope="col" class="text-center">D</th>
                              <th scope="col" class="text-center">L</th>
                              <th scope="col" class="text-center">GF</th>
                              <th scope="col" class="text-center">GA</th>
                              <th scope="col" class="text-center">GD</th>
                              <th scope="col" class="text-center">Points</th>
                              <th scope="col" class="w-25 text-center">Form</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row" class="text-center">1</th>
                              <td>
                                <div class="club-name">
                                  <img src="<?=base_url(); ?>asset1/images/fcgoa.svg" alt="">
                                  <span>fC goa</span>
                                </div>
                              </td>
                              <td class="text-center">6</td>
                              <td class="text-center">6</td>
                              <td class="text-center">6</td>
                              <td class="text-center">6</td>
                              <td class="text-center">6</td>
                              <td class="text-center">6</td>
                              <td class="text-center">6</td>
                              <td class="text-center">33</td>
                              <td class="text-center">
                                <div class="streaks">
                                  <span class="win-green">w</span>
                                  <span class="win-green">w</span>
                                  <span class="win-green">w</span>
                                  <span class="win-green">w</span>
                                  <span class="win-green">w</span>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row" class="text-center">2</th>
                              <td>
                                <div class="club-name">
                                  <img src="<?=base_url(); ?>asset1/images/fckb.svg" alt="">
                                  <span>Kerela blasters FC</span>
                                </div>
                              </td>
                              <td class="text-center">7</td>
                              <td class="text-center">7</td>
                              <td class="text-center">7</td>
                              <td class="text-center">7</td>
                              <td class="text-center">7</td>
                              <td class="text-center">7</td>
                              <td class="text-center">7</td>
                              <td class="text-center">20</td>
                              <td class="text-center">
                                <div class="streaks">
                                  <span class="loose-red">l</span>
                                  <span class="win-green">w</span>
                                  <span class="loose-red">l</span>
                                  <span class="win-green">w</span>
                                  <span class="win-green">w</span>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row" class="text-center">3</th>
                              <td>
                                <div class="club-name">
                                  <img src="<?=base_url(); ?>asset1/images/mbsg.svg" alt="">
                                  <span>Mohun bagan super giant</span>
                                </div>
                              </td>
                              <td class="text-center">8</td>
                              <td class="text-center">8</td>
                              <td class="text-center">8</td>
                              <td class="text-center">8</td>
                              <td class="text-center">8</td>
                              <td class="text-center">8</td>
                              <td class="text-center">8</td>
                              <td class="text-center">15</td>
                              <td class="text-center">
                                <div class="streaks">
                                  <span class="win-green">w</span>
                                  <span class="win-green">w</span>
                                  <span class="loose-red">l</span>
                                  <span class="draw-yellow">d</span>
                                  <span class="win-green">w</span>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row" class="text-center">4</th>
                              <td>
                                <div class="club-name">
                                  <img src="<?=base_url(); ?>asset1/images/mcfc.svg" alt="">
                                  <span>mumbai city FC</span>
                                </div>
                              </td>
                              <td class="text-center">8</td>
                              <td class="text-center">8</td>
                              <td class="text-center">8</td>
                              <td class="text-center">8</td>
                              <td class="text-center">8</td>
                              <td class="text-center">8</td>
                              <td class="text-center">8</td>
                              <td class="text-center">15</td>
                              <td class="text-center">
                                <div class="streaks">
                                  <span class="draw-yellow">d</span>
                                  <span class="win-green">w</span>
                                  <span class="loose-red">l</span>
                                  <span class="win-green">w</span>
                                  <span class="not-play">-</span>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="rating-review--sec">
                      <div class="rating-heading">
                        <h3>review & ratings</h3>
                        <a href="#">Rate this Academy</a>
                      </div>
                      <div class="rating-review--content">
                        <div class="review-form-sec">
                          <div class="rating-review--stars_sec">
                            <fieldset class="rating">
                              <input type="radio" id="star5" name="rating" value="5"><label class="full" for="star5"
                                title="Awesome - 5 stars"></label>
                              <input type="radio" id="star4half" name="rating" value="4 and a half"><label
                                class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                              <input type="radio" id="star4" name="rating" value="4"><label class="full" for="star4"
                                title="Pretty good - 4 stars"></label>
                              <input type="radio" id="star3half" name="rating" value="3 and a half"><label
                                class="half" for="star3half" title="Meh - 3.5 stars"></label>
                              <input type="radio" id="star3" name="rating" value="3"><label class="full" for="star3"
                                title="Meh - 3 stars"></label>
                              <input type="radio" id="star2half" name="rating" value="2 and a half"><label
                                class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                              <input type="radio" id="star2" name="rating" value="2"><label class="full" for="star2"
                                title="Kinda bad - 2 stars"></label>
                              <input type="radio" id="star1half" name="rating" value="1 and a half"><label
                                class="half" for="star1half" title="Meh - 1.5 stars"></label>
                              <input type="radio" id="star1" name="rating" value="1"><label class="full" for="star1"
                                title="Sucks big time - 1 star"></label>
                              <input type="radio" id="starhalf" name="rating" value="half"><label class="half"
                                for="starhalf" title="Sucks big time - 0.5 stars"></label>
                            </fieldset>
                          </div>
                          <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                              placeholder="Enter Your Name">
                          </div>
                          <div class="mb-3">
                            <textarea class="form-control review-message" id="exampleFormControlTextarea1" rows="3"
                              placeholder="Type Your Review "></textarea>
                          </div>
                          <button type="submit" class="modal-submit--bttn">
                            Send
                          </button>
                        </div>
                      </div>
                      <div class="rating-content--sec">
                        <ul>
                          <li>
                            <div class="rating-review--heading">
                              <div class="heding-contents">
                                <img src="<?=base_url(); ?>asset1/images/review-user.svg" alt="" />
                                <h5>anant singh chauhan</h5>
                              </div>
                              <div class="rating-star">
                                <div class="Stars-small" style="--rating: 4"
                                  aria-label="Rating of this product is 4 out of 5.">
                                  <span class="star-count">4.0</span>
                                </div>
                                <span class="post-time">2 mins ago</span>
                              </div>
                            </div>
                            <p>
                              Lorem ipsum dolor sit amet consectetur. Ante
                              erat phasellus vestibulum quam felis bibendum
                              vestibulum massa sem. In nulla habitant ac
                              tellus imperdiet. Sed fusce at tortor at ipsum
                              proin. Platea praesent vitae bibendum ut. Urna
                              lacus odio vitae ullamcorper. Libero aliquam
                              blandit at pellentesque diam non sed mattis
                              turpis. Vestibulum posuere ut ac quis.
                            </p>
                            <div class="replies-sec">
                              <a href="#" class="reply-icon">No replies</a>
                              <a href="#">reply</a>
                            </div>
                            <hr />
                          </li>
                          <li>
                            <div class="rating-review--heading">
                              <div class="heding-contents">
                                <img src="<?=base_url(); ?>asset1/images/review-user.svg" alt="" />
                                <h5>anant singh chauhan</h5>
                              </div>
                              <div class="rating-star">
                                <div class="Stars-small" style="--rating: 4"
                                  aria-label="Rating of this product is 4 out of 5.">
                                  <span class="star-count">4.0</span>
                                </div>
                                <span class="post-time">2 mins ago</span>
                              </div>
                            </div>
                            <p>
                              Lorem ipsum dolor sit amet consectetur. Ante
                              erat phasellus vestibulum quam felis bibendum
                              vestibulum massa sem. In nulla habitant ac
                              tellus imperdiet. Sed fusce at tortor at ipsum
                              proin. Platea praesent vitae bibendum ut. Urna
                              lacus odio vitae ullamcorper. Libero aliquam
                              blandit at pellentesque diam non sed mattis
                              turpis. Vestibulum posuere ut ac quis.
                            </p>
                            <div class="replies-sec">
                              <a href="#" class="reply-icon">No replies</a>
                              <a href="#">reply</a>
                            </div>
                            <hr />
                          </li>
                          <li>
                            <div class="rating-review--heading">
                              <div class="heding-contents">
                                <img src="<?=base_url(); ?>asset1/images/review-user.svg" alt="" />
                                <h5>anant singh chauhan</h5>
                              </div>
                              <div class="rating-star">
                                <div class="Stars-small" style="--rating: 4"
                                  aria-label="Rating of this product is 4 out of 5.">
                                  <span class="star-count">4.0</span>
                                </div>
                                <span class="post-time">2 mins ago</span>
                              </div>
                            </div>
                            <p>
                              Lorem ipsum dolor sit amet consectetur. Ante
                              erat phasellus vestibulum quam felis bibendum
                              vestibulum massa sem. In nulla habitant ac
                              tellus imperdiet. Sed fusce at tortor at ipsum
                              proin. Platea praesent vitae bibendum ut. Urna
                              lacus odio vitae ullamcorper. Libero aliquam
                              blandit at pellentesque diam non sed mattis
                              turpis. Vestibulum posuere ut ac quis.
                            </p>
                            <div class="replies-sec">
                              <a href="#" class="reply-icon">No replies</a>
                              <a href="#">reply</a>
                            </div>
                            <hr />
                          </li>
                          <li>
                            <div class="rating-review--heading">
                              <div class="heding-contents">
                                <img src="<?=base_url(); ?>asset1/images/review-user.svg" alt="" />
                                <h5>anant singh chauhan</h5>
                              </div>
                              <div class="rating-star">
                                <div class="Stars-small" style="--rating: 4"
                                  aria-label="Rating of this product is 4 out of 5.">
                                  <span class="star-count">4.0</span>
                                </div>
                                <span class="post-time">2 mins ago</span>
                              </div>
                            </div>
                            <p>
                              Lorem ipsum dolor sit amet consectetur. Ante
                              erat phasellus vestibulum quam felis bibendum
                              vestibulum massa sem. In nulla habitant ac
                              tellus imperdiet. Sed fusce at tortor at ipsum
                              proin. Platea praesent vitae bibendum ut. Urna
                              lacus odio vitae ullamcorper. Libero aliquam
                              blandit at pellentesque diam non sed mattis
                              turpis. Vestibulum posuere ut ac quis.
                            </p>
                            <div class="replies-sec">
                              <a href="#" class="reply-icon">No replies</a>
                              <a href="#">reply</a>
                            </div>
                            <hr />
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <section class="academy-blog--sec">
                <div class="container-fluid">
                  <h2>Our Blogs</h2>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="blog-content--box">
                        <div class="blog-img">
                          <img src="<?=base_url(); ?>asset1/images/blog1.jpg" alt="" />
                        </div>
                        <div class="blog-text">
                          <span>October 11th, 2023 1:49 PM</span>
                          <p>
                            Coaches of the ISL: Profiles of Tactical
                            Innovators and Strategists
                          </p>
                          <a href="#">read now</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="blog-content--box">
                        <div class="blog-img">
                          <img src="<?=base_url(); ?>asset1/images/blog2.jpg" alt="" />
                        </div>
                        <div class="blog-text">
                          <span>October 11th, 2023 1:49 PM</span>
                          <p>
                            Coaches of the ISL: Profiles of Tactical
                            Innovators and Strategists
                          </p>
                          <a href="#">read now</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="blog-content--box">
                        <div class="blog-img">
                          <img src="<?=base_url(); ?>asset1/images/blog3.jpg" alt="" />
                        </div>
                        <div class="blog-text">
                          <span>October 11th, 2023 1:49 PM</span>
                          <p>
                            Coaches of the ISL: Profiles of Tactical
                            Innovators and Strategists
                          </p>
                          <a href="#">read now</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="academy-join-now">
                <div class="container">
                  <div class="joinnow-box">
                    <div class="join-now-content">
                      <img src="<?=base_url(); ?>asset1/images/logo.svg" alt="" />
                      <h2>Join BookMyPlayer Now!</h2>
                      <p>
                        Join Us now if you are a player and needs a boost in
                        your career
                      </p>
                      <div class="joinnow-subs">
                        <input type="text" class="form-control custom-subs" aria-label="Sizing example input"
                          aria-describedby="inputGroup-sizing-lg" placeholder="Enter Email To Subscribe" />
                        <button type="submit">Subscribe</button>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <div class="tab-pane fade" id="nav-fixture" role="tabpanel" aria-labelledby="nav-fixture-tab">
              <p>
                <strong>Fixture & Results Comming Soon</strong>
              </p>
            </div>
            <div class="tab-pane fade" id="nav-standings" role="tabpanel" aria-labelledby="nav-standings-tab">
              <p>
                <strong>Standings Comming Soon</strong>
              </p>
            </div>
            <div class="tab-pane fade" id="nav-champions" role="tabpanel" aria-labelledby="nav-champions-tab">
              <p>
                <strong>Champions Comming Soon</strong>
              </p>
            </div>
            <div class="tab-pane fade" id="nav-photos--videos" role="tabpanel" aria-labelledby="nav-photos--tab">
              <p>
                <strong>Photos & Videos Comming Soon</strong>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid container-space">
    <div class="reviews-option">
      <div class="review-bttn">
        <button class="review-modal" data-bs-toggle="modal" data-bs-target="#reviewModal">
          <img src="<?=base_url(); ?>asset1/images/small-stars.svg" alt="" /> (23 reviews)
        </button>
        <!-- Review Modal Start -->
        <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="review-modal--content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                  Rate this Academy
                </h5>
                <div class="rate-star-modal">
                  <fieldset class="rating">
                    <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5"
                      title="Awesome - 5 stars"></label>
                    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half"
                      for="star4half" title="Pretty good - 4.5 stars"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4"
                      title="Pretty good - 4 stars"></label>
                    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half"
                      for="star3half" title="Meh - 3.5 stars"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3"
                      title="Meh - 3 stars"></label>
                    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half"
                      for="star2half" title="Kinda bad - 2.5 stars"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2"
                      title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half"
                      for="star1half" title="Meh - 1.5 stars"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1"
                      title="Sucks big time - 1 star"></label>
                    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf"
                      title="Sucks big time - 0.5 stars"></label>
                  </fieldset>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <input type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="enter your name" />
                </div>
                <div class="mb-3">
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                    placeholder="type your review "></textarea>
                </div>
                <button type="submit" class="modal-submit--bttn">
                  Send
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- Review Modal End -->
      </div>
      <div class="share-bttn">
        <div class="social-share--bttn">
          <div class="share-modal">
            <button class="social-share--btn trigger">
              <img src="<?=base_url(); ?>asset1/images/share.svg" alt="" />
            </button>
            <!-- Modal Body Start -->
            <div class="social-modal">
              <div class="modal-content">
                <span class="close-button">x</span>
                <div class="share-modal--content">
                  <h3>share academy profile</h3>
                  <div class="social-icons">
                    <a href="#">
                      <div class="icons">
                        <img src="<?=base_url(); ?>asset1/images/mfb.svg" alt="" />
                        <span>facebook</span>
                      </div>
                    </a>
                    <a href="#">
                      <div class="icons">
                        <img src="<?=base_url(); ?>asset1/images/minsta.svg" alt="" />
                        <span>instagram</span>
                      </div>
                    </a>
                    <a href="#">
                      <div class="icons">
                        <img src="<?=base_url(); ?>asset1/images/mwhtaps.svg" alt="" />
                        <span>whatsapp</span>
                      </div>
                    </a>
                    <a href="#">
                      <div class="icons">
                        <img src="<?=base_url(); ?>asset1/images/mlinkd.svg" alt="" />
                        <span>linkedIn</span>
                      </div>
                    </a>
                    <a href="#">
                      <div class="icons">
                        <img src="<?=base_url(); ?>asset1/images/mcopy.svg" alt="" />
                        <span>copy link</span>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal Body End -->
          </div>
          <a href="#"><img src="<?=base_url(); ?>asset1/images/wishlist.svg" alt="" /></a>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
