/* * * * * * * * * * * * * * *
* Returns all published videos
* * * * * * * * * * * * * * */

function changePlayer(videoId){
  console.log('called');
  var link = "https://www.youtube.com/embed/" + videoId;
  document.getElementById("player").src=link;
  return;
}
