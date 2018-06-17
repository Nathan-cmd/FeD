var source; 

var items = document.querySelectorAll('li');
for (item of items) {
  item.addEventListener('dragstart', dragStarted);
  item.addEventListener('drop', dropped);
  item.addEventListener('dragover', draggingOver);
  item.addEventListener('dragenter', dragEnter);
}
document.getElementById("list").addEventListener('mouseleave', dropped, false);

function isBefore(a, b) {
    if (a.parentNode == b.parentNode) {
        for (var cur = a; cur; cur = cur.previousSibling) {
            if (cur === b) { 
                return true;
            }
        }
    }
    return false;
} 

function dragEnter(e) {
    if (isBefore(source, e.target)) {
        e.target.parentNode.insertBefore(source, e.target);
    }
    else {
        e.target.parentNode.insertBefore(source, e.target.nextSibling);
    }
}

function dragStarted(e){
  e.dataTransfer.setData("text/plain", e.target.innerHTML);
  e.dataTransfer.effectAllowed = "move";
  this.classList.add("over");
  source = this;
}

function draggingOver(e){
  e.preventDefault();
  e.dataTransfer.dropEffect = "move";
}

function dropped(e){
  source.classList.remove("over");
}