//make toggle
function toggleNotif(){
  document.getElementById('notif').classList.toggle('cliked');
  document.getElementById('notif-list').classList.toggle('show');
  document.getElementById('user').classList.remove('cliked');
  document.getElementById('user-list').classList.remove('show');
}
function toggleUser(){
  document.getElementById('user').classList.toggle('cliked');
  document.getElementById('user-list').classList.toggle('show');
  document.getElementById('notif').classList.remove('cliked');
  document.getElementById('notif-list').classList.remove('show');
}
function toggleNav(){
  document.getElementById('aside').classList.toggle('show');
  document.getElementById('navbar').classList.toggle('full');
  document.getElementById('container').classList.toggle('full');
}
