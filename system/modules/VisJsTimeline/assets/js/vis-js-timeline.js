/**
 * Move the timeline a given percentage to left or right
 * @param {Number} percentage   For example 0.1 (left) or -0.1 (right)
 */
function moveTimeline (percentage, objTimeline) {
  var range = objTimeline.getWindow();
  var interval = range.end - range.start;

  objTimeline.setWindow({
    start: range.start.valueOf() - interval * percentage,
    end:   range.end.valueOf()   - interval * percentage
  });
}

/**
 * Zoom the timeline a given percentage in or out
 * @param {Number} percentage   For example 0.1 (zoom out) or -0.1 (zoom in)
 */
function zoomTimeline (percentage, objTimeline) {
  var range = objTimeline.getWindow();
  var interval = range.end - range.start;

  objTimeline.setWindow({
    start: range.start.valueOf() - interval * percentage,
    end:   range.end.valueOf()   + interval * percentage
  });
}