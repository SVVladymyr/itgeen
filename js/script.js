(function () {
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.fixed-action-btn');
        var instances = M.FloatingActionButton.init(elems, {
          direction: 'left',
          hoverEnabled: false,
        });
    });

    /* Smoke effect*/
    window.onload = function() {    
      var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
      window.requestAnimationFrame = requestAnimationFrame;

      var canvas = document.getElementById("canvas"),
          ctx = canvas.getContext("2d"),
          settings = {
            color: {
              r: 255,
              g: 255,
              b: 255
            }
          },
          loading = true;
      var parent = canvas.parentNode;    
      canvas.height = parent.offsetHeight;
      //canvas.width = parent.clientWidth; 
      canvas.width = window.innerWidth - parent.offsetLeft - 100;

      var parts = [],
          minSpawnTime = 100,
          lastTime = new Date().getTime(),
          maxLifeTime = Math.min(5000, (canvas.height / (1.5 * 60) * 1000));
          var emitterX = canvas.width / 1.91;
          //var emitterX = canvas.width/1.55;
          if(canvas.width > 1000)          
            var emitterY = canvas.height-canvas.height/5;
          else
            var emitterY = canvas.height-canvas.height/3.8;

          var emitterY = canvas.height;

          smokeImage = new Image();

      function spawn() {
        if (new Date().getTime() > lastTime + minSpawnTime) {
          lastTime = new Date().getTime();
          parts.push(new smoke(emitterX, emitterY));
        }
      }

      function render() {
        if(loading){
          load();
          return false;
        }
        
        var len = parts.length;
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        
        while (len--) {
          if (parts[len].y < 0 || parts[len].lifeTime > maxLifeTime) {
            parts.splice(len, 1);
          } else {
            parts[len].update();
            
            ctx.save();
            var offsetX = -parts[len].size / 2,
                offsetY = -parts[len].size / 2;
            
            ctx.translate(parts[len].x - offsetX, parts[len].y - offsetY);
            ctx.rotate(parts[len].angle / 180 * Math.PI);
            ctx.globalAlpha = parts[len].alpha;
            ctx.drawImage(smokeImage, offsetX, offsetY, parts[len].size, parts[len].size);
            ctx.restore();
          }
        }
        spawn();
        requestAnimationFrame(render);
      }

      function smoke(x, y, index) {
        this.x = x;
        this.y = y;
        
        this.size = 1;
        this.startSize = 8;
        this.endSize = 60;
        
        this.angle = Math.random() * 359;
        
        this.startLife = new Date().getTime();
        this.lifeTime = 0;
        
        this.velY = -1 - (Math.random() * 0.1);
        this.velX = Math.floor(Math.random() * (-2) + 3)/2.7;
      }

      smoke.prototype.update = function () {
        this.lifeTime = new Date().getTime() - this.startLife;
        this.angle += 0.3;
        
        var lifePerc = ((this.lifeTime / maxLifeTime) * 100);
        
        this.size = this.startSize - ((this.endSize - this.startSize) * lifePerc * .2);
        
        this.alpha = 1 - (lifePerc * .01);
        this.alpha = Math.max(this.alpha, 0);
        
        this.x += this.velX;
        this.y += this.velY;
      }

      smokeImage.src = document.getElementById("img-canvas").src;
      smokeImage.onload = function(){
        loading = false; 
      }

      function load(){
        if(loading){
          setTimeout(load, 100); 
        }else{
          render(); 
        }
      }

      render();

      // save off the original image for colorizing
      var origImage = smokeImage;

  //    window.onresize = resizeMe;
   //   window.onload = resizeMe;

      function resizeMe() {
        canvas.height = document.body.offsetHeight;
      }

      function changeColor() {
        var tCanvas = document.createElement("canvas"),
            tCtx = tCanvas.getContext("2d"),
            color = settings.color;
        
        tCanvas.width = tCanvas.height = 32;
        tCtx.drawImage(origImage, 0, 0, 32, 32);
        
        var imgd = tCtx.getImageData(0, 0, 32, 32),
            pix = imgd.data;
        
        for (var i = 0, n = pix.length; i < n; i += 4) {
          pix[i] = color.r 
          pix[i + 1] = color.g;
          pix[i + 2] = color.b;
        }
        
        tCtx.putImageData(imgd, 0, 0);
        return tCanvas.toDataURL();
      }

      // Settings
      /*
      var gui = new dat.GUI();
      var colorController = gui.addColor(settings, 'color').onChange(function () {
        smokeImage.src = changeColor();
      });
  */
      /* End smoke effect*/
    }
})();
