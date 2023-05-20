<?php
    include_once 'header.php';
?>
    <div class="library-body">
        <div class="library-header">
            <h1>Game Library</h1>
            <div class="library-filter-browse">
                <h1>Browse</h1>
                <div class="library-filter-buttons">
                    <form action="">
                        <input type="checkbox" id="Action" name="check" value="Action" onclick="onlyOne(this)">
                        <label for="Action">Action</label>
                        <input type="checkbox" id="Adventrure" name="check" value="Adventrure" onclick="onlyOne(this)">
                        <label for="Adventrure">Adventure</label>
                        <input type="checkbox" id="Arcade" name="check" value="Arcade" onclick="onlyOne(this)">
                        <label for="Arcade">Arcade</label>
                        <input type="checkbox" id="Shooting" name="check" value="Shooting" onclick="onlyOne(this)">
                        <label for="Shooting">Shooting</label>
                        <input type="checkbox" id="Sports" name="check" value="Sports" onclick="onlyOne(this)"> 
                        <label for="Sports">Sports</label>
                    </form>
                    <div class="filter-search">
                        <!-- <span class="fa fa-search"></span> -->
                        <input type="search" placeholder="Search">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="genre-container">
        <div class="genre1">
            <p>Action</p>
            <button class="right-arrow"><span class="fa fa-caret-right"></span></button>
            <button class="left-arrow"><span class="fa fa-caret-left"></span></button>
            <div class="game-card-container">
                <div class="game-card">
                    <div class="game-thumb">
                        <img src="Images/games_library/chick-invaders.jpg" alt="">
                    </div>
                    <h2>Chicken Invaders</h2>
                    <button>Download</button>
                </div>
                <div class="game-card">
                    <div class="game-thumb">
                        <img src="Images/games_library/nfh.jpg" alt="">
                    </div>
                    <h2>Neighbours from Hell</h2>
                    <button>Download</button>
                </div>
                <div class="game-card">
                    <div class="game-thumb">
                        <img src="Images/games_library/claw.jpg" alt="">
                    </div>
                    <h2>Captain Claw</h2>
                    <button>Download</button>
                </div>
                <div class="game-card">
                    <div class="game-thumb">
                        <img src="Images/games_library/tom-and-jerry-in-fists-of-furry-17.big.jpg" alt="">
                    </div>
                    <h2>Tom and Jerry</h2>
                    <button>Download</button>
                </div>
                <div class="game-card">
                    <div class="game-thumb">
                        <img src="Images/games_library/tmnt.jpg" alt="">
                    </div>
                    <h2>Teenage Mutant Ninja Turtles</h2>
                    <button>Download</button>
                </div>
                <div class="game-card">
                    <div class="game-thumb">
                        <img src="Images/games_library/Jazz_Jackrabbit_2_PC_22.png" alt="">
                    </div>
                    <h2>Jazz JackRabbit 2</h2>
                    <button>Download</button>
                </div>
            </div>
        </div>
        <div class="genre1">
            <p>Sports and Racing</p>
            <button class="right-arrow"><span class="fa fa-caret-right"></span></button>
            <button class="left-arrow"><span class="fa fa-caret-left"></span></button>
            <div class="game-card-container">
                <div class="game-card">
                    <div class="game-thumb">
                        <img src="Images/games_library/pes.jpg" alt="pes6">
                    </div>
                    <h2>Pro Evolution Soccer:2006</h2>
                    <button>Download</button>
                </div>
                <div class="game-card">
                    <div class="game-thumb">
                        <img src="Images/games_library/nfs.jpg" alt="">
                    </div>
                    <h2>Need for Speed:Most Wanted</h2>
                    <button>Download</button>
                </div>
                <div class="game-card">
                    <div class="game-thumb">
                        <img src="Images/games_library/crazy-taxi-pc.jpg" alt="">
                    </div>
                    <h2>Crazy Taxi</h2>
                    <button>Download</button>
                </div>
                <div class="game-card">
                    <div class="game-thumb">
                        <img src="Images/games_library/road-rash-05.png" alt="">
                    </div>
                    <h2>Road Rash</h2>
                    <button>Download</button>
                </div>
                <div class="game-card">
                    <div class="game-thumb">
                        <img src="Images/games_library/wwe.jpg" alt="">
                    </div>
                    <h2>WWE RAW 2009</h2>
                    <button>Download</button>
                </div>
            </div>
        </div>
        <div class="genre1 Arcade">
            <p>Fun</p>
            <button class="right-arrow"><span class="fa fa-caret-right"></span></button>
            <button class="left-arrow"><span class="fa fa-caret-left"></span></button>
            <div class="game-card-container">
                <div class="game-card">
                    <div class="game-thumb">
                        <img src="Images/games_library/nfh.jpg" alt="">
                    </div>
                    <h2>Neighbours from Hell</h2>
                    <button>Download</button>
                </div>
                <div class="game-card">
                    <div class="game-thumb">
                        <img src="Images/games_library/diner-dash-7.jpg" alt="">
                    </div>
                    <h2>Diner Dash</h2>
                    <button>Download</button>
                </div>
                <div class="game-card">
                    <div class="game-thumb">
                        <img src="Images/games_library/zuma-deluxe-free-download-screenshot-2.jpg" alt="">
                    </div>
                    <h2>ZUMA:Deluxe</h2>
                    <button>Download</button>
                </div>
                <div class="game-card">
                    <div class="game-thumb">
                        <img src="Images/games_library/icy-tower-02.png" alt="">
                    </div>
                    <h2>Icy Tower</h2>
                    <button>Download</button>
                </div>
                <div class="game-card">
                    <div class="game-thumb">
                        <img src="Images/games_library/YU GI OH.jpg" alt="">
                    </div>
                    <h2>Yu-Gi-Oh:Power of Chaos</h2>
                    <button>Download</button>
                </div>
                <div class="game-card">
                    <div class="game-thumb">
                        <img src="Images/games_library/shc.jpg" alt="">
                    </div>
                    <h2>Strong Hold Crusador</h2>
                    <button>Download</button>
                </div>
            </div>
        </div>
        <div class="genre1">
            <p>Adventrure</p>
            <button class="right-arrow"><span class="fa fa-caret-right"></span></button>
            <button class="left-arrow"><span class="fa fa-caret-left"></span></button>
            <div class="game-card-container">
                <div class="game-card">
                    <div class="game-thumb">
                        <img src="Images/games_library/aladdin-psx.png" alt="">
                    </div>
                    <h2>Aladdin</h2>
                    <button>Download</button>
                </div>
                <div class="game-card">
                    <div class="game-thumb">
                        <img src="Images/games_library/320px-Sonicclassicheroes.png" alt="">
                    </div>
                    <h2>Sonic:Classic Heroes</h2>
                    <button>Download</button>
                </div>
                <div class="game-card">
                    <div class="game-thumb">
                        <img src="Images/games_library/tarzan.png" alt="">
                    </div>
                    <h2>Tarzan</h2>
                    <button>Download</button>
                </div>
                <div class="game-card">
                    <div class="game-thumb">
                        <img src="Images/games_library/spiderman.jpg" alt="">
                    </div>
                    <h2>Spider-Man</h2>
                    <button>Download</button>
                </div>
                <div class="game-card">
                    <div class="game-thumb">
                        <img src="Images/games_library/herc.jpg" alt="">
                    </div>
                    <h2>Hercules</h2>
                    <button>Download</button>
                </div>
                <div class="game-card">
                    <div class="game-thumb">
                        <img src="Images/games_library/alien.jpg" alt="">
                    </div>
                    <h2>Alien 2</h2>
                    <button>Download</button>
                </div>
            </div>
        </div>
    </div>

<?php
    include_once 'footer.php';
?>
