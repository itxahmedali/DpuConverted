const scroller = document.querySelector(".scrollbar-container");
const bodyScrollBar = Scrollbar.init(scroller, {
  damping: 0.05,
  delegateTo: document,
  thumbMinSize: 15,
});

$(document).ready(function () {
  bodyScrollBar.addListener(() => {
    var tag = Utils.isElementInView($(".tag"), false);
    if (tag) {
      lightS();
      if (window.innerWidth == 414 || window.innerWidth < 414) {
        setTimeout(() => {
          $(".tag1").css("font-size", "60px");
        }, 2000);
        setTimeout(() => {
          $(".tag2").css("font-size", "60px");
        }, 3000);
        setTimeout(() => {
          $(".tag3").css("font-size", "60px");
        }, 4000);
      } else {
        setTimeout(() => {
          $(".tag1").css("font-size", "100px");
        }, 2000);
        setTimeout(() => {
          $(".tag2").css("font-size", "100px");
        }, 3000);
        setTimeout(() => {
          $(".tag3").css("font-size", "100px");
        }, 4000);
      }
    }
  });
  var mouse = {
    x: window.innerWidth / 2,
    y: window.innerHeight / 2,
  };
  //access mouse pos with mouse.x and mouse.y
  function getMousePos(event) {
    return {
      x: event.clientX,
      y: event.clientY,
    };
  }
  $(".sales").on("mousemove", function (event) {
    mouse = getMousePos(event);
  });
  var scene = new THREE.Scene();
  scene.fog = new THREE.Fog("#000000", 75, 10);
  var camera = new THREE.PerspectiveCamera(
    45,
    window.innerWidth / window.innerHeight
  );

  var renderer = new THREE.WebGLRenderer();
  var clientHeight = $('.sales').height();
  setTimeout(() => { 
    renderer.setSize(window.innerWidth, clientHeight+80);
  });
  $(".sales").append(renderer.domElement);
  //Create elements here:
  // addNote("white")
  function randint(min, max) {
    return Math.floor(Math.random() * max) + min;
  }
  function int(num) {
    return Math.floor(num);
  }
  var stars = [];
  var starCount = 1000;
  var asteroids = [];
  var asteroidCount = 0;
  var asteroidSpawn = 100;
  var cameraZ = 0;
  function newStar() {
    gr = {};
    gr["geometry"] = new THREE.SphereGeometry(1, 8, 8);
    gr["material"] = new THREE.MeshBasicMaterial({ color: "red" });
    gr["sphere"] = new THREE.Mesh(gr["geometry"], gr["material"]);
    scene.add(gr["sphere"]);
    w = window.innerWidth;
    h = window.innerHeight;
    w2 = w / 2;
    h2 = h / 2;
    gr["sphere"].position.x = randint(-w2, w);
    gr["sphere"].position.y = randint(-h2, h);
    gr["sphere"].position.z = cameraZ - 1000;
    return gr;
  }
  function newAsteroid() {
    gr = {};
    gr["geometry"] = new THREE.SphereGeometry(1, randint(3, 5), randint(2, 5));
    gr["material"] = new THREE.MeshBasicMaterial({ color: "red" });
    gr["shape"] = new THREE.Mesh(gr["geometry"], gr["material"]);
    scene.add(gr["shape"]);
    w = window.innerWidth;
    h = window.innerHeight;
    w2 = w / 2;
    h2 = h / 2;
    gr["shape"].position.x = randint(-w2 / 100, w / 100);
    gr["shape"].position.y = randint(-h2 / 100, h / 100);
    gr["shape"].position.z = cameraZ - 1000;
    gr["shape"].scale.x = randint(1, 3);
    gr["shape"].scale.y = randint(1, 3);
    gr["shape"].scale.z = randint(1, 3);
    return gr;
  }
  function towards(ax, ay, bx, by, speed) {
    steps_number = Math.max(Math.abs(bx - ax), Math.abs(by - ay));
    stepx = parseFloat(bx - ax) / steps_number;
    stepy = parseFloat(by - ay) / steps_number;
    return [int(ax + stepx * speed), int(ay + stepy * speed)];
  }
  var lightSpeed = 1;
  var speedStop = false;
  function lightS() {
    lightSpeed = 2;
  }
  $(".sales").on("click", function () {
    // ("click", lightS, false);
    lightS();
  });
  //end of elements
  camera.position.z = cameraZ;

  var render = function () {
    requestAnimationFrame(render);
    mainloop();
    renderer.render(scene, camera);
  };
  function mainloop() {
    if (stars.length < starCount) {
      stars.push(newStar());
    }
    if (asteroids.length < asteroidCount) {
      asteroidSpawn -= 1;
      if (asteroidSpawn == 0) {
        asteroids.push(newAsteroid());
        asteroidSpawn = 100;
      }
    }
    for (var i = 0; i < stars.length; i++) {
      star = stars[i];
      if (star["sphere"].position.z > cameraZ) {
        scene.remove(star["sphere"]);
        stars.splice(i, 1);
      }
      star["sphere"].scale.z = lightSpeed;
    }
    for (var i = 0; i < asteroids.length; i++) {
      asteroid = asteroids[i];
      if (asteroid["shape"].position.z > cameraZ) {
        scene.remove(asteroid["shape"]);
        asteroids.splice(i, 1);
      }
      asteroid["shape"].rotation.x += 0.01;
      asteroid["shape"].rotation.y += 0.01;
    }
    if (speedStop == false) {
      if (lightSpeed > 1) {
        lightSpeed += 2;
      }
      if (lightSpeed > 300) {
        speedStop = true;
      }
    } else {
      lightSpeed -= 5;
      if (lightSpeed < 2) {
        speedStop = false;
        lightSpeed = 1;
      }
    }
    if (lightSpeed > 150) {
      cameraZ -= lightSpeed / 2;
    } else {
      cameraZ -= 1;
    }
    //camera.position.z = cameraZ
    lookX = mouse.x - window.innerWidth / 2;
    lookX /= 50;
    lookX = -lookX;
    lookY = mouse.y - window.innerHeight / 2;
    lookY /= 50;
    //lookY = -lookY
    lookAt = new THREE.Vector3(lookX, lookY, cameraZ - 10);
    camera.position.z = cameraZ;
    camera.lookAt(lookAt);
  }
  render();
});
