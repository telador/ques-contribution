
function Contact(){
    return(
        <div>
        <a name="contact" id="titlecontact">Contacts</a>
        <ul type="squere" class="list">
            <li><a id="link" href="https://ko-fi.com/que_question_mark">Ko-fi</a></li>
            <li><a id="link" href="https://www.patreon.com/battlesystem">Patreon</a></li>
            <li><a id="link" href="https://discordapp.com/users/226551828106575881">Discord</a></li>
            <li>Email:  manuel@battle-system.com</li>
        </ul>
        </div>
    )
}

function TheEnd(){
    return(
        <div>
            
            <script src="about.js" type="text/babel"></script>

        </div>
    )
}


function Text(){
    return(
        <div>
        <pre className="textblock">Less than 2 weeks after the announcement Que? was sharing some of his ideas and first extensions in Owlbear community Discord.</pre>
        <img className="photoblock"  src="../ph/Que1.png" />
        <pre className="textblock"> 2 more weeks and the first version of Clash was released - a tool for combat initiative with the ability to pull SRD statblocks.</pre>
        <video autoPlay loop className="photoblock" width="600px">
            <source src="../ph/betaClash.mp4" type="video/mp4"/>
        </video>
        <pre className="textblock">With time more extensions were created - one of the most popular at the time was Dynamic Fog of War. Sadly, before any major updates 
            <br />and planned features were released developer made the announcement.</pre>
        <img className="photoblock"  src="../ph/Que2.png" />  
        <pre className="textblock">Later Que? “inherited” the DFoW project with some of the long-planned features.</pre>
        <img className="photoblock"  src="../ph/Que3.png" />  
        <pre className="textblock">In late 2023 Que? is maintaining 10 different extensions and keeps working on polishing his 11th to release. </pre>
    </div>

    )
}


function Title(){
    return(
        <div className="titlebox">
             <hr color=""></hr>
          <p id="title">The man behind "Battle-System"</p>
          <hr color=""></hr>
        </div>
    )
}

function TitleHead(){
    return(
        <div id="header">
            <div className="header">
                <div className="headlogo">
                    <img className="logo"  src="../ph/Que.png" />
                    <b className="namelogo">Que?</b>
                </div>
                <div className="headbotton">
                    <a href="../home/home.php">Home</a>
                    <a href="about.php">About</a>
                    <a href="../portfolio/portfolio.php">Portfolio</a>
                    <a href="#contact">Contacts</a>
                </div>
            </div>
        </div>
        
    )
}



function Main() {
    return( 
        <div>
            <TitleHead />
            <Title />
            <Text />
            <Contact />
            <TheEnd />
        </div>       
    )
}



const app = document.getElementById("head_main");
ReactDOM.render(<Main />, app);