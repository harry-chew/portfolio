const c = document.getElementById('canvas');
const ctx = c.getContext("2d");
const slider = document.getElementById('speed');

slider.addEventListener("change", updateSpeed);

//vars
let grid;
let newGrid;
let width = 10;
let height = 10;
let cols = 800/width;
let rows = 600/height;
let speed = slider.value;

function updateSpeed() {
  speed = slider.value;
}

function create2DArray(cols, rows) {
  let arr = new Array(cols);
  for(let i = 0; i < arr.length; i++) {
    arr[i] = new Array(rows);
  }
  return arr;
}

function setup() {
  grid = create2DArray(cols,rows);
  for(let i = 0; i < cols; i++) {
    for(let j=0; j < rows; j++) {
      grid[i][j] = Math.floor(Math.random() * 2);
    }
  }
}

function emptyGrid() {
  newGrid = create2DArray(cols,rows);
}

function drawGrid() {
  ctx.fillStyle = '#4d4d4d';
  ctx.fillRect(0,0,canvas.width, canvas.height);
  for(let i = 0; i < cols; i++) {
    for(let j=0; j < rows; j++) {
      if(grid[i][j] == 1) {
        ctx.fillStyle = 'white';
        ctx.fillRect(i*width, j*height, width - 1, height - 1);
      }
    }
  }
}

function updateGrid() {
  for(let i = 0; i < cols; i++) {
    for(let j = 0; j < rows; j++) {
    //check neighbours and count them up
      let nb = checkNeighbours(grid, i, j);
      if(grid[i][j] == 1 && nb == 2 || nb == 3) {
        newGrid[i][j] = 1;
      }
      else if(grid[i][j] == 0 && nb == 3) {
        newGrid[i][j] = 1;
      }
      else {
        newGrid[i][j] = 0;
      }
    }
  }
  grid = newGrid;
}

function checkCellState(cell) {
  if(cell == 1) {
    return true;
  } else {
    return false;
  }
}

function checkNeighbours(g, x, y) {
  let n = 0;
  for(let i = -1; i < 2; i++) {
    for(let j = -1; j < 2; j++) {
      if(x+i >= 0 && y+j >= 0 && x+i < cols && y+j < rows) {
        if(checkCellState(g[x+i][y+j])) {
          n+=g[x+i][y+j];
        }
      }
    }
  }
  n-=g[x][y];
  return n;
}

//THE ACTUAL GAME OF LIFE
setup();
drawGrid();

function loop() {
  emptyGrid();
  updateGrid();
  drawGrid();
  setTimeout(loop, speed);

}

loop();