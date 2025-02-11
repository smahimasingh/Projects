<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blood Bank </title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <style>

 #content {
	 position: relative;
	 margin: 50px auto;
	 width: 600px;
	 height: 600px;
}
 h3 {
  position: absolute;
    top: -35px;
    left: 100px;
}
 #blood_selector {
	 display: grid;
	 grid-template-columns: repeat(4, 1fr);
	 grid-template-rows: 1fr 1fr;
	 grid-gap: 5px;
	 width: 200px;
	 height: 100px;
	 position: absolute;
	 left: 10px;
	 top: 45px;
	 z-index: 2;
}
 #blood_selector div {
	 user-select: none;
	 display: flex;
	 align-items: center;
	 justify-content: center;
	 background-color: #f7f7f7;
	 border: 1px solid #b51e23;
	 border-radius: 25%;
}
 #blood_selector div:hover {
	 border: 1px solid #1da1f2;
	 font-weight: bold;
	 cursor: pointer;
}
 #blood_content {
	 position: absolute;
	 top: 50px;
	 width: 100%;
	 height: 100%;
}
 #center_via_c {
	 position: absolute;
	 z-index: 1;
	 width: 100%;
	 height: 100%;
}
 #center_via_c .center_via {
	 width: 8px;
	 background: #ccc;
	 height: 200px;
	 position: absolute;
	 left: 304px;
	 top: 276px;
}
 #center_via_c .blood_via {
	 height: 0;
	 background-color: #b51e23;
	 right: 50%;
	 width: 8px;
	 transition: height 0.25s;
}
/*  .bar {
	 position: fixed;
	 right: 0;
	 top: 55px;
	 width: 55%;
	 height: 8px;
	 border-radius: 2px 0 0 2px;
	 background-color: #ccc;
} */
 .main_bag {
	 position: absolute;
	 width: 100px;
	 height: 140px;
	 top: 70px;
	 left: 250px;
	 border-radius: 30px;
	 opacity: 0.8;
	 background-color: rgba(154, 207, 234, 0.9);
	 border: 8px solid rgba(154, 207, 234, 0.9);
}
 .main_bag .blood {
	 position: absolute;
	 left: 0;
	 bottom: 0;
	 width: 100%;
	 height: 100px;
	 background-color: #b51e23;
	 border-radius: 0 0 35px 35px;
	 transition: height 1s;
}
 .main_bag .blood::before {
	 content: "";
	 position: absolute;
	 top: -6px;
	 width: 100%;
	 height: 10px;
	 background-color: #92191b;
	 border-radius: 100%;
}
 .main_bag::before {
	 content: "";
	 position: absolute;
	 top: -118px;
	 left: 45%;
	 width: 10%;
	 height: 110px;
	 background-color: #ccc;
}
 #humans {
	 position: absolute;
	 top: 276px;
	 width: 400px;
	 height: 200px;
	 left: 108px;
	 display: grid;
	 grid-template-columns: 1fr 1fr;
	 grid-template-rows: repeat(4, 1fr);
}
 #humans .human {
	 position: relative;
}
 #humans .human .via {
	 position: relative;
	 text-align: centre;
	 width: 50%;
	 height: 8px;
	 background-color: #ccc;
	 bottom: 0;
}
 #humans .human .blood_via {
	 position: absolute;
	 height: 8px;
	 background-color: #b51e23;
	 width: 0;
	 bottom: 0;
	 transition: width 1s;
}
 #humans .human.left {
	 display: grid;
	 justify-content: left;
	 align-content: center;
}
 #humans .human.left .blood_via {
	 right: 0;
}
 #humans .human.left .scribble {
	 left: -30px;
}
 #humans .human.left .scribble span {
	 left: -40px;
	 text-align: right;
}
 #humans .human.right {
	 display: grid;
	 justify-content: right;
	 align-content: center;
}
 #humans .human.right .scribble {
	 right: -60px;
}
 #humans .human.right .scribble span {
	 right: -10px;
}
 #humans .human .scribble {
	 position: absolute;
	 height: 50px;
	 width: 50px;
	 top: 0;
	 transition: background 1s;
}
 #humans .human .scribble span {
	 position: absolute;
	 display: grid;
	 align-items: end;
	 height: 100%;
}
 #humans .human .scribble .head {
	 width: 30%;
	 height: 30%;
	 background-color: #666;
	 border-radius: 50%;
	 margin: 2px auto;
	 transition: background 1s;
	 position: absolute;
	 top: 30%;
	 left: 5%;
}
 #humans .human .scribble .body {
	 position: absolute;
	 bottom: 0;
	 width: 40%;
	 height: 20%;
	 background-color: #666;
	 border-radius: 50% 50% 0 0;
	 margin: 0 auto;
	 transition: background 1s;
}
 .no_transition {
	 transition: none !important;
}
 .highlight {
	 border: 2px solid #b51e23 !important;
	 font-weight: bold;
}
 .highlightText {
	 font-weight: bold;
}
 @media only screen and (max-width: 400px) {
	 #content {
		 position: relative;
		 margin: 25px auto;
		 width: 300px;
		 height: 300px;
	}
	 #content h3 {
		 top: 10px;
		 font-size: 1em;
	}
	 #content #blood_selector {
		 width: 150px;
		 height: 75px;
		 font-size: 0.75em;
		 top: 45px;
	}
	 #content .bar {
		 top: 40px;
	}
	 #content .main_bag {
		 width: 75px;
		 height: 105px;
		 left: 125px;
	}
	 #content .main_bag::before {
		 top: -108px;
		 height: 100px;
	}
	 #content .main_bag .blood {
		 height: 70%;
	}
	 #content #center_via_c .center_via {
		 left: 167px;
		 top: 240px;
	}
	 #content #humans {
		 top: 240px;
		 width: 180px;
		 left: 85px;
	}
}
 
    </style>
  <body>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
<div class="nav">
   <div>
    <h2 class="text-white"><i class="fa-solid fa-heart-pulse"></i> Blood Bank Management</h2>
   </div>
    <div class="navlinks">
        <a href="donorlogout.php" class="navLink">Log out <i class="fa-solid fa-right-from-bracket"></i></a>
    </div>
</div>
<div class="sidebar">
  <a href="home.php"><i class="fa-solid fa-house"></i> Home</a>
  <a href=""><i class="fa-solid fa-person"></i> Donor</a>
  <a href="patients.php"><i class="fa-solid fa-bed-pulse"></i> Patient</a>
  <a href="donordetails.php"><i class="fa-solid fa-hand-holding-medical"></i>Donation</a>
  <a href="bloodrequest.php"><i class="fa-solid fa-droplet"></i> Blood Requests</a>
  <a href=""><i class="fa-solid fa-clock-rotate-left"></i> Request History</a>
  <a href="stock.php"><i class="fa-solid fa-hand-holding-droplet"></i> Blood stock</a>
</div>


<script src="https://kit.fontawesome.com/a24879a822.js" crossorigin="anonymous"></script>


<div id="content">
  <h3>Select the donor blood type:</h3>
  <div id="blood_selector">
    <div>O−</div>
    <div>O+</div>
    <div>A−</div>
    <div>A+</div>
    <div>B−</div>
    <div>B+</div>
    <div>AB−</div>
    <div>AB+</div>
  </div>
  <div id="blood_content">
    <div class="bar"></div>
    <div class="main_bag">
      <div class="blood"></div>
    </div>
  </div>
  <div id="center_via_c">
    <div class="center_via">
      <div class="blood_via"></div>
    </div>
  </div>
  <div id="humans">
    <div class="human left">
      <div class="scribble"><span class="blood_type">O−</span>
        <div class="head"></div>
        <div class="body"></div>
      </div>
      <div class="via"></div>
      <div class="blood_via"></div>
    </div>
    <div class="human right">
      <div class="scribble"><span class="blood_type">O+</span>
        <div class="head"></div>
        <div class="body"></div>
      </div>
      <div class="via"></div>
      <div class="blood_via"></div>
    </div>
    <div class="human left">
      <div class="scribble"><span class="blood_type">A−</span>
        <div class="head"></div>
        <div class="body"></div>
      </div>
      <div class="via"></div>
      <div class="blood_via"></div>
    </div>
    <div class="human right">
      <div class="scribble"><span class="blood_type">A+</span>
        <div class="head"></div>
        <div class="body"></div>
      </div>
      <div class="via"></div>
      <div class="blood_via"></div>
    </div>
    <div class="human left">
      <div class="scribble"><span class="blood_type">B−</span>
        <div class="head"></div>
        <div class="body"></div>
      </div>
      <div class="via"></div>
      <div class="blood_via"></div>
    </div>
    <div class="human right">
      <div class="scribble"><span class="blood_type">B+</span>
        <div class="head"></div>
        <div class="body"></div>
      </div>
      <div class="via"></div>
      <div class="blood_via"></div>
    </div>
    <div class="human left">
      <div class="scribble"><span class="blood_type">AB−</span>
        <div class="head"></div>
        <div class="body"></div>
      </div>
      <div class="via"></div>
      <div class="blood_via"></div>
    </div>
    <div class="human right">
      <div class="scribble"><span class="blood_type">AB+</span>
        <div class="head"></div>
        <div class="body"></div>
      </div>
      <div class="via"></div>
      <div class="blood_via"></div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script>
    const humans_parent = document.getElementById("humans");
const BLOOD_TYPES = {
  "O−": ["O−", "O+", "A−", "A+", "B−", "B+", "AB−", "AB+"],
  "O+": ["O+", "A+", "B+", "AB+"],
  "A−": ["A−", "A+", "AB−", "AB+"],
  "A+": ["A+", "AB+"],
  "B−": ["B−", "B+", "AB−", "AB+"],
  "B+": ["B+", "AB+"],
  "AB−": ["AB−", "AB+"],
  "AB+": ["AB+"]
};
const reset_button = document.getElementById("reset");
const selector = document.getElementById("blood_selector");
const blood_vias = document.querySelectorAll("#humans .human .blood_via");
const blood_bag = document.querySelector("#blood_content > div.main_bag > div");
const center_via = document.querySelector(".center_via > .blood_via");
const blood_types = document.querySelectorAll(".blood_type");
let lastCalled;
addListeners();

function callIfChildren(e) {
  if (lastCalled) change();
  if (e.target !== this) setRecipents(e);
}

function addListeners() {
  selector.addEventListener("click", callIfChildren);
  reset.addEventListener("click", reset);
}

function reset() {
  change();
  blood_bag.style.height = "100px";
  center_via.style.height = "0px";
}

function change() {
  lastCalled.target.classList.remove("highlight");

  for (let i = 0; i < blood_vias.length; i++) {
    blood_vias[i].style.width = "0px";
    blood_types[i].classList.remove("highlightText");
  }
}

function timeout(ms) {
  return new Promise((resolve) => setTimeout(resolve, ms));
}

async function setRecipents(e) {
  e.target.classList.add("highlight");
  lastCalled = e;

  const donor = e.target.innerText;
  for (let item of BLOOD_TYPES[donor]) {
    const recipent_index = Object.keys(BLOOD_TYPES).indexOf(item);
    const height = 50 + 50 * Math.floor(recipent_index / 2);
    const blood_height = 125 - 25 * Math.floor(recipent_index / 2);
    blood_bag.style.height = `${blood_height}px`;
    center_via.style.height = `${height}px`;

    await timeout(100);
    blood_vias[recipent_index].style.width = "100%";
    blood_types[recipent_index].classList.add("highlightText");
  }
}
</script>
  </body>
</html>