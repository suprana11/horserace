<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/horserace/css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#tabs").tabs();
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#back-arrow").click(function() {
                $("#ui-id-1").click();
            })
        });
    </script>
    <title>Cheltenham</title>
</head>

<body id="homepage">
    <?php include('header.php') ?>
    <div class="wrapper">
        <div class="home-left-block">
            <div class="hero-image-block">
                <p class="hero-top-text">Horseracing > Cheltenham</p>
                <div class="hero-text">
                    <h2>Cheltenham</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque facilisis feugiat et, amet convallis
                        orci, vitae. Vitae nunc tellus a cursus mauris sed viverra.
                    </p>
                </div>
                <button class="offer-sm hide-above-sm"><img src="/horserace/img/Star 6.svg">OFFERS</button>
            </div>

            <!-- buttons -->
            <div id="tabs">
                <ul>
                    <li><a href="#tabs-1-table">Racecard</a></li>
                    <li><a href="#tabs-2-table">Results</a></li>
                    <li><a href="#tabs-3">Odds</a></li>
                    <li><a href="#tabs-4">Tips</a></li>
                </ul>

             <div id="tabs-1-table">
                <div class="table1-header">
                    <h3>Cheltenham</h3>
                    <p>Going: Soft, Goot to Soft, Good, Firm</p>
                </div>

                <div class="table-body">
                    <table class="table-1">
                        <tr>
                            <td><b>13:00</b></td>
                            <td>
                                <table class="table-2">
                                    <tr>
                                    <td><b>Sky Bet Supreme Novices’ Hurdle (Grade 1) (GBB Race)</b></td>
                                                <td>4 Runners</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <table class="table-1">
                        <tr>
                            <td><b>14:00</b></td>
                            <td>
                                <table class="table-2">
                                    <tr>
                                    <td><b>Name of race here (Grade 1) (GBB Race)</b></td>
                                                <td>8 Runners</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <table class="table-1">
                        <tr>
                            <td><b>13:00</b></td>
                            <td>
                                <table class="table-2">
                                    <tr>
                                    <td><b>Name of race here (Grade 1) (GBB Race)</b></td>
                                                <td>4 Runners</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <table class="table-1">
                        <tr>
                            <td><b>13:00</b></td>
                            <td>
                                <table class="table-2">
                                    <tr>
                                    <td><b>Name of race here (Grade 1) (GBB Race)</b></td>
                                                <td>4 Runners</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
                </table>
                </div>

                <div id="tabs-2-table">
                    <div class="back-to">
                        <div class="back-to-heading">
                        <img id="back-arrow" src="../img/Vector.svg">
                                   <p> Back to Racecards</p>
                        </div>
                        <div class="back-to-content">
                            <div class="first-content">
                               <p><b>Sky Bet Supreme Novices’ Hurdle<br>(Grade 1) (GBB Race)</b></p>
                               <p>2m 87y (Class 1, 4YO plus)</p>
                            </div>
                            <div class="second-content">
                                <p>10 Runners</p>
                                <p>Winner: £52,735</p>
                            </div>
                        </div>
                    </div>
                    <div class="table-heading">
                            <p>Weighed in</p>
                            <p>Winning Time: 3m 56.32s</p>                                      Off Time: 13:20:54</pre>
                        </div>
                        <div class="result-table-content">
                    <table class="result-outer-table">
                        <tr><td><b>1st<br>(1)</b></td>
            
                            <td>
                                <table class="result-inner-table">
                                <td><img src="/horserace/img/yellowJersey.svg">&nbsp;&nbsp;<b>Chimed</b></td>
                                <td style="color:#666666">J Neil Callan<br>T Brett Johnson</td>
                                </table>
                            </td>
                        
                        <td><b> 1/6</b><br>SP</td></tr>
                    </table>
                    <table class="result-outer-table">
                        <tr><td><b>1st<br>(1)</b></td>
            
                            <td>
                                <table class="result-inner-table">
                                <td><img src="/horserace/img/blueJersey.svg">&nbsp;&nbsp;<b>Constitution</b></td>
                                <td style="color:#666666">J Neil Callan<br>T Brett Johnson</td>
                                </table>
                            </td>
                        
                        <td><b> 1/6</b><br>SP</td></tr>
                    </table>
                    <table class="result-outer-table">
                        <tr><td><b>1st<br>(1)</b></td>
            
                            <td>
                                <table class="result-inner-table">
                                <td><img src="/horserace/img/jockey.svg">&nbsp;&nbsp;<b>Al Agaila</b></td>
                                <td style="color:#666666">J Neil Callan<br>T Brett Johnson</td>
                                </table>
                            </td>
                        
                        <td><b> 1/6</b><br>SP</td></tr>
                    </table>
                    <table class="result-outer-table">
                        <tr><td><b>1st<br>(1)</b></td>
            
                            <td>
                                <table class="result-inner-table">
                                <td><img src="/horserace/img/jockey.svg">&nbsp;&nbsp;<b>Al Agaila</b></td>
                                <td style="color:#666666">J Neil Callan<br>T Brett Johnson</td>
                                </table>
                            </td>
                        
                        <td><b> 1/6</b><br>SP</td></tr>
                    </table>
                        </div>
                </div>
                
                <!-- <div id="tabs-2-table">
                    <div id="table-3">
                        <table>
                        <tr>
                        <th colspan="3">
                                    <img id="back-arrow" src="../img/Vector.svg">
                                    Back to Racecards
                                </th>
                        </tr>
                        <tr>
                                <td>Sky Bet Supreme Novices’ Hurdle <br>(Grade 1) (GBB Race)</td>
                               <td>2m 87y (Class 1, 4YO plus)</td>
                               <td>10 Runners<br>Winner: £52,735
                            </td>
                            </tr>
                        </table>
                    </div>
                    <table>
                        <tr>
                            <th colspan="4">Weighed in
                                <pre>Winning Time: 3m 56.32s                                      Off Time: 13:20:54</pre>
                            </th>
                        </tr>
                        <tr>
                            <td><b>1st</b>
                                <br>(1)
                            </td>
                            <td><img src="/horserace/img/yellowJersey.svg">&nbsp;&nbsp;<b>Chimed</b></td>
                            <td style="color:#666666">J Neil Callan<br>
                                T Brett Johnson</td>
                            <td><b> 1/6</b><br>
                                SP</td>
                        </tr>
                        <tr>
                            <td><b> 2nd </b>
                                <br> (2)
                            </td>
                            <td> <img src="/horserace/img/blueJersey.svg">&nbsp;&nbsp;<b>Constitution</b></td>
                            <td style="color:#666666">J Neil Callan<br>T Brett Johnson
                            </td>
                            <td><b> 10/1</b> <br>SP</td>
                        </tr>

                        <tr>
                            <td><b> 3rd </b>
                                <br>(8)
                            </td>
                            <td> <img src="/horserace/img/jockey.svg">&nbsp;&nbsp;<b>Al Agaila</b></td>
                            <td style="color:#666666">J Neil Callan<br>T Brett Johnson</td>
                            <td><b> 40/1</b><br>SP</td>
                        </tr>

                        <tr>
                            <td><b> 4th </b>
                                <br>(4)
                            </td>
                            <td> <img src="/horserace/img/jockey.svg">&nbsp;&nbsp;<b> Al Agaila</b></td>
                            <td style="color:#666666">J Neil Callan<br>T Brett Johnson</td>
                            <td><b> 100/1</b><br>SP</td>
                        </tr>

                    </table>
                </div> -->
            </div>




            <!-- info-block -->
            <div class="racing-info-block">
                <h1>Racing Info</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit nisl nibh ut. Enim ut mauris justo
                    non
                    magna
                    morbi laoreet. Nullam diam auctor magna varius sagittis euismod. Morbi lobortis etiam sollicitudin
                    blandit.
                    Quis sit adipiscing ac commodo ultrices et at libero. Nibh est libero pretium tincidunt accumsan.
                    Quis
                    odio
                    enim magna nulla molestie quisque donec sit sollicitudin. Amet a urna nec tristique. Diam turpis at
                    curabitur duis curabitur velit. Dolor mattis a, tristique montes, lorem massa etiam. Nec eu luctus
                    ut
                    porta
                    ut. Dis nulla eget ipsum sit tincidunt eget bibendum. Nunc sit donec auctor mattis. Luctus
                    suspendisse
                    imperdiet ut enim tincidunt sed volutpat scelerisque sit.</p>
            </div>
            <!-- <div class="news-block-sm-wrapper"> -->

            <div class="news-block-sm hide-above-sm">
                <div class="news-heading">
                    <p>Latest Racing News</p>
                </div>
                <div class="news-content">
                    <div class="news-text">
                        <p style="color: #273D83;
                    padding-left: 5px;">Tag Here</p>
                        <p style="font-weight: 700;
                     font-size: 16px;
                     line-height: 20px;
                     padding-right: 9px;
                     padding-left: 5px;">
                            Neil Mulholland Can Claim More Big Race Glory With Previous Winner Of The Bet365 Gold Cup</p>
                        <p style="color: #666666;
                        padding-left: 5px;">05 July 2020</p>
                    </div>
                    <div class="news-pics">
                        <img src="\horserace\img\sm-news1.svg" alt="news-img-1" style="margin-top: 19px;">
                    </div>
                </div>
                <div class="news-content">
                    <div class="news-text">
                        <p style="color: #273D83;
                        padding-left: 5px;">Tag Here</p>
                        <p style="font-weight: 700;
                      font-size: 16px;
                      line-height: 20px;
                      padding-right: 7px;
                      padding-left: 5px;">
                            Neil Mulholland Can Claim More Big Race Glory With Previous Winner Of The Bet365 Gold Cup</p>
                        <p style="color: #666666;
                    ">05 July 2020</p>
                    </div>
                    <div class="news-pics">
                        <img src="\horserace\img\sm-news2.svg" alt="news-img-2">
                    </div>
                </div>
                <div class="news-last-block">
                    <p>Got to all articles</p>
                </div>
            </div>
            <!-- </div> -->



            <!-- forum thread -->
            <div class="forum-thread-block">
                <p>forum thread</p>
            </div>
            <div class="jockey-table-sm-wrapper">
            <div class="category-block-sm hide-above-sm">
                <h3><a href="#">Form</a></h3>
                <h3><a href="#">Horses</a></h3>
                <h3><a href="#">Stats</a></h3>
            </div>
            <div class="jockey-table-sm hide-above-sm">
                <table>
                    <tr>
                    <th colspan="2">
                    <img src="/horserace/img/jockey.svg">Jockey Name
                    </th>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td>21/07/22</td>
                    </tr>
                    <tr>
                        <td>Pos</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Course</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Distance</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Horsename</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Going</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Class</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>RPR</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Starting Price</td>
                        <td>0</td>
                    </tr>
                </table>
            </div>
            </div>



            <div class="category-block">
                <h3><a href="#">Jockey</a></h3>
                <h3><a href="#">Horses</a></h3>
                <h3><a href="#">Trainers</a></h3>
            </div>
            <div class="jockey-table">
                <table>
                    <tr>
                        <th colspan="8">
                            <div class="jockey-heading">
                            <img src="/horserace/img/jockey.svg">
                           <p> Jockey Name</p>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <td>Race record</td>
                        <td>Runs</td>
                        <td>Wins</td>
                        <td>Win %</td>
                        <td>Places</td>
                        <td>Winnings</td>
                        <td>Earnings</td>
                        <td>OR</td>
                    </tr>
                    <tr>
                        <td>Chase</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Hurdle</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>NHF</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>PTP</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Rules Races</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="home-ad-block">
            <div class="ad-blocks">
                <div class="ad-text">
                    <img src="\horserace\img\888sport-line-logo 23.svg" alt="888">
                    <p>25/1 Stradivarius to win Yorkshire Cup - Paid in CASH</p>
                </div>
                <button>GET OFFER</button>
            </div>
            <div class="ad-blocks">
                <div class="ad-text">
                    <img src="\horserace\img\5884a9104549c0b81ec05474.svg" alt="betfred">
                    <p>Bet £10 Get £30</p>
                </div>
                <button>GET OFFER</button>
            </div>
            <div class="ad-blocks">
                <div class="ad-text">
                    <img src="\horserace\img\bet365-1.svg" alt="bet365">
                    <p>Welcome Offer</p>
                    <p> </p>
                    <p> </p>
                </div>
                <button>GET OFFER</button>
            </div>
            <div class="ad-blocks">
                <div class="ad-text">
                    <img src="\horserace\img\1280px-William_Hill.svg" alt="williamhill">
                    <p>25/1 Stradivarius to win Yorkshire Cup - Paid in CASH</p>
                </div>
                <button>GET OFFER</button>
            </div>
            <div class="ad-blocks">
                <div class="ad-text">
                    <img src="\horserace\img\5884a9104549c0b81ec05474.svg" alt="betfred">
                    <p>Exclusive promo code</p>
                </div>
                <button>GET OFFER</button>
            </div>
            <div class="ad-blocks">
                <div class="ad-text">
                    <img src="\horserace\img\888sport-line-logo 23.svg" alt="888">
                    <p>25/1 Stradivarius to win Yorkshire Cup - Paid in CASH</p>
                </div>
                <button>GET OFFER</button>
            </div>
            <div class="ad-blocks">
                <div class="ad-text">
                    <img src="\horserace\img\1280px-William_Hill.svg" alt="williamhill">
                    <p>25/1 Stradivarius to win Yorkshire Cup - Paid in CASH</p>
                </div>
                <button>GET OFFER</button>
            </div>
            <div class="ad-blocks">
                <div class="ad-text">
                    <img src="\horserace\img\888sport-line-logo 23.svg" alt="888">
                    <p>25/1 Stradivarius to win Yorkshire Cup - Paid in CASH</p>
                </div>
                <button>GET OFFER</button>
            </div>

            <div class="offer-block">
                <img src="\horserace\img\5884a9104549c0b81ec05474.svg">
                <h3>Bet £10 and get £60 in Free Bets with Betfred</h3>
                <p>Terms and Conditions apply</p>
                <button>Get Offer</button>
                <!-- <img class="yellow-recatnagle" src="\horserace\img\Rectangle 33.svg" alt="offer-rectangle"> -->

            </div>
            <div class="news-block">
                <div class="news-heading">
                    <p>Latest Racing News</p>
                </div>
                <div class="news-content">
                    <div class="news-text">
                        <p style="color: #273D83;
                    padding-left: 5px;">Grand National</p>
                        <p style="font-weight: 700;
                     font-size: 16px;
                     line-height: 20px;
                     padding-right: 9px;
                     padding-left: 5px;">Neil Mulholland Can Claim More Big Race Glory With ...</p>
                        <p style="color: #666666;
                        padding-left: 5px;">20 mins ago</p>
                    </div>
                    <div class="news-pics">
                        <img src="\horserace\img\news1.svg" alt="news-img-1" style="margin-top: 19px;">
                    </div>
                </div>
                <div class="news-content">
                    <div class="news-text">
                        <p style="color: #273D83;
                        padding-left: 5px;">Cheltenham</p>
                        <p style="font-weight: 700;
                      font-size: 16px;
                      line-height: 20px;
                      padding-right: 7px;
                      padding-left: 5px;">Title of article Story here this is shorter</p>
                        <p style="color: #666666;
                    ">20 mins ago</p>
                    </div>
                    <div class="news-pics">
                        <img src="\horserace\img\new2.svg" alt="news-img-2">
                    </div>
                </div>
                <div class="news-last-block">
                    <p>Got to all articles</p>
                </div>
            </div>

            <div class="betting-block">
                <div class="betting-heading">
                    <p>Horse Racing Betting Guides</p>
                </div>
                <div class="betting-content">
                    <div class="betting-text">
                        <p style="color: #273D83;">Tag</p>
                        <p style="font-weight: 800;
                     font-size: 16px;
                     line-height: 20px;">Betting guide title &nbsp; here</p>
                        <p style="color: #666666;">20 mins ago</p>
                    </div>
                    <div class="betting-pics">
                        <img src="\horserace\img\news1.svg" alt="news-img-1">
                    </div>
                </div>
                <div class="betting-content">
                    <div class="betting-text">
                        <p style="color: #273D83;">Tag</p>
                        <p style="font-weight: 800;
                     font-size: 16px;
                     line-height: 20px;">Betting guide title &nbsp; here</p>
                        <p style="color: #666666;">20 mins ago</p>
                    </div>
                    <div class="betting-pics">
                        <img src="\horserace\img\new2.svg" alt="news-img-2">
                    </div>
                </div>
                <div class="betting-last-block">
                    <p>Got to all betting Guides</p>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    <?php include('footer.php') ?>
</footer>