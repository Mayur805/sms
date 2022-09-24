$(document).ready(function() {
    $('.menu-outline').click(function() {
        $(this).css('display', 'none');
        $('.close-outline').css('display', 'block');
    });
    $('.close-outline').click(function() {
        $(this).css('display', 'none');
        $('.menu-outline').css('display', 'block');
    });

    $('.back-top').click(function() {
        window.scrollTo(0, 0);
    });
    $('#draggable-point').draggable({
        axis: 'x',
        containment: "#audio-progress"
    });
});

//Input  Range
var nodes = document.querySelectorAll(".bar-node");
var barLength = nodes.length;
// will be widened later based on active no position
var currentProgressBar = document.getElementById("currentProgressBar");
// change totalSteps to be based off of some data rather than DOM
var totalNodes = nodes.length;
//
var progress = 0;

for (var i = 0; i <= nodes.length; i++) {
    currNode = nodes[i];
    currNode.setAttribute("data-node-index", i);
    //!!  !!//
    currNode.addEventListener("click", function(e) {
        // update bar accepts an index which can correspond to your form's page or slide length
        updateBar(e.target.getAttribute("data-node-index"));
    });
}

function updateBar(targetNodeIndex) {
    var targetNode;
    // clear current active and complete for refresh
    for (var i = 0; i < nodes.length; i++) {
        nodes[i].classList.remove("node-active");
        nodes[i].classList.remove("node-complete");
    }

    for (var i = 0; i < nodes.length; i++) {
        if (i == targetNodeIndex) {
            targetNode = nodes[i];
            targetNode.classList.add("node-active");
        }
    }

    // update node styles
    for (var i = 0; i < nodes.length; i++) {
        var currNode = nodes[i];
        // add complete to any node prior to active node
        if (currNode.className.indexOf("node-active") > -1) {
            for (var j = 0; j < i; j++) {
                nodes[j].classList.add("node-complete");
            }
        }
    }
    // set progress bar width to distance of node from left of parent
    currentProgressBar.style.width = `${targetNode.offsetLeft}px`;
}