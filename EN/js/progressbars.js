
//progressbar js ------------------------------------------------

let settings = {
  color: '#838590',
  trailColor: '#FFFFFF',
  trailWidth: 10,
  duration: 1500,
  easing: 'bounce',
  strokeWidth: 10,


  from: {color: '#838590', a: 0},
  to: {color: '#838590', a: 1},

  // Set default step function for all animate calls
  step: function (state, circle) {
    circle.path.setAttribute('stroke', state.color);

    let value = Math.round(circle.value() * 100);
    if (value === 0) {
      // noinspection JSUnresolvedFunction
      circle.setText('');
    } else {
      // noinspection JSUnresolvedFunction
      circle.setText(value + '%');
    }
  }
};


// noinspection JSUnresolvedVariable,JSUnresolvedFunction
let bar1 = new ProgressBar.Circle('#prog1', settings);
// noinspection JSUnresolvedVariable,JSUnresolvedFunction
let bar2 = new ProgressBar.Circle('#prog2', settings);
// noinspection JSUnresolvedVariable,JSUnresolvedFunction
let bar3 = new ProgressBar.Circle('#prog3', settings);
// noinspection JSUnresolvedVariable,JSUnresolvedFunction
let bar4 = new ProgressBar.Circle('#prog4', settings);
// noinspection JSUnresolvedVariable,JSUnresolvedFunction
let bar5 = new ProgressBar.Circle('#prog5', settings);
// noinspection JSUnresolvedVariable,JSUnresolvedFunction
let bar6 = new ProgressBar.Circle('#prog6', settings);


function createBar(bar, percentage) {
  bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
  bar.text.style.fontSize = '130%';
  bar.text.style.color = '#838590';
  bar.path.style.strokeLinecap = 'round';
  bar.animate(percentage);
}


function createAllBar() {
  createBar(bar1, 0.85);
  createBar(bar2, 0.65);
  createBar(bar3, 0.85);
  createBar(bar4, 0.8);
  createBar(bar5, 0.4);
  createBar(bar6, 0.9);
}

//normal progress bar
let normalbarsettings = {
  strokeWidth: 7,
  easing: 'bounce',
  duration: 2500,
  color: '#474D5D',
  trailColor: '#e0e0e0',
  trailWidth: 7,
  svgStyle: {width: '100%', height: '100%'},

  from: {color: '#FFEA82'},
  to: {color: '#ED6A5A'},
  step: (state, bar) => {
    let value = Math.round(bar.value() * 100);
    if (value === 0) {
      // noinspection JSUnresolvedFunction
      bar.setText('');
    } else {
      // noinspection JSUnresolvedFunction
      bar.setText('');
    }
  }
};


// noinspection JSValidateTypes,JSUnresolvedVariable
let nbar1 = new ProgressBar.Line('#npb1', normalbarsettings);
// noinspection JSValidateTypes,JSUnresolvedVariable
let nbar2 = new ProgressBar.Line('#npb2', normalbarsettings);
// noinspection JSValidateTypes,JSUnresolvedVariable
let nbar3 = new ProgressBar.Line('#npb3', normalbarsettings);
// noinspection JSValidateTypes,JSUnresolvedVariable
let nbar4 = new ProgressBar.Line('#npb4', normalbarsettings);
// noinspection JSValidateTypes,JSUnresolvedVariable
let nbar5 = new ProgressBar.Line('#npb5', normalbarsettings);
// noinspection JSValidateTypes,JSUnresolvedVariable
let nbar6 = new ProgressBar.Line('#npb6', normalbarsettings);


function createNormalBars(bar, percentage) {
  bar.animate(percentage);
}


function createAllnormal() {
  createNormalBars(nbar1, 0.9);
  createNormalBars(nbar2, 0.95);
  createNormalBars(nbar3, 0.9);
  createNormalBars(nbar4, 1);
  createNormalBars(nbar5, 0.85);
  createNormalBars(nbar6, 0.2);

}


//progressbar js ------------------------------------------------
