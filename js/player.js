var launch_player = document.getElementById("launch_player");
var player_wrapper = document.getElementById("player");
var player = document.getElementById("music");
var progressBar = document.getElementById("progress-bar");
var duration = document.getElementById("duration");
var btnPlayPause = document.getElementById("btnPlayPause");

var single_player = {
  launch:function(){
    player_wrapper.classList.remove("disp-none");
    player_wrapper.classList.add("animate");
    single_player.loadMusic();
  },
  loadMusic:function(url){
    player.src = "../2.m4a";
    single_player.playNpause();
  },
  playNpause:function(){
    if(player.src){
      if(player.paused || player.ended){
        //button will change here;
        single_player.changeButton(btnPlayPause,"pause","fa fa-pause");
        player.play();
      }
      else{
        //button will change here;
        single_player.changeButton(btnPlayPause,"play","fa fa-play");
        player.pause();
      }
    }
  },
  updateProgress:function(){
      var percentage = Math.floor((100/player.duration) * player.currentTime);
      progressBar.value = 0;
      if(percentage){
        progressBar.value = percentage;
      }
      progressBar.innerHTML = progressBar.title = percentage + "%";
      single_player.updateDuration();
  },
  stopAudio:function(){
    // player.pause();
    player.currentTime = 0;
  },
  updateDuration:function(){
    let currentTime = parseInt(player.currentTime);
    // currentTime = (player.currentTime).toString();
    // currentTime =currentTime.substr(0,currentTime.indexOf('.'));
    var currentMinutes = Math.floor(currentTime/60);
    var currentSeconds = currentTime - currentMinutes * 60;
    currentMinutes = "0" +  currentMinutes;
    currentMinutes = currentMinutes.slice(-2);
    currentSeconds  = "0" + currentSeconds;
    currentSeconds = currentSeconds.slice(-2);

    //-----------Total duration------------------
    var totalTime = parseInt(player.duration);
    var totalMinutes = Math.floor(totalTime/60);
    var totalSeconds = totalTime - totalMinutes * 60;
    totalMinutes = "0" +  totalMinutes;
    totalMinutes = totalMinutes.slice(-2);
    totalSeconds  = "0" + totalSeconds;
    totalSeconds = totalSeconds.slice(-2);
    duration.innerHTML = currentMinutes + ":" + currentSeconds + " / " + totalMinutes + ":" + totalSeconds ;
  },
  seek:function(e) {
    if (player.src) {
      var percent = e.offsetX / this.offsetWidth;
      var ctime = percent * player.duration;
      player.currentTime = ctime;
      console.log(ctime);
      e.target.value = Math.floor(percent / 100);
      e.target.innerHTML = progressBar.value + '% played';
    }
  },
  changeButton: function(btn,value,icon){
    btn.title = value;
    btn.className = "" + icon;
  }
}
launch_player.addEventListener("click",single_player.launch,false);
player.addEventListener("timeupdate",single_player.updateProgress,false);
btnPlayPause.addEventListener("click",single_player.playNpause,false);
progressBar.addEventListener("click", single_player.seek,true);
