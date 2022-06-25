const c = document.getElementById('canvas');
const ctx = c.getContext("2d");

let grid;
let newGrid;
let width = 10;
let height = 10;
let cols = 800/width;
let rows = 600/height;


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
      // if(grid[i][j] == 1 && nb > 3 || nb < 2) {
      //   newGrid[i][j] = 0;
      // }
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
  //console.log("grid["+x+"]["+y+"]" + " has " + n + " neighbours");
  return n;
}


setup();
drawGrid();
//console.table(grid);


function loop() {
    emptyGrid();
    updateGrid();
    drawGrid();
   setTimeout(loop, 1000);
}
loop();



// class Grid {
//   constructor(w,h) {
//     this.width = w;
//     this.height = h;
//   }
//
//   createGrid(cols, rows) {
//     let arr = new Array(cols);
//     for(let i = 0; i < arr.length; i++) {
//       arr[i] = new Array(rows);
//     }
//     return arr;
//   }
//
//   draw(ctx) {
//     ctx.fillRect(0,0, this.width, this.height);
//   }
// }
//
// class Cell {
//   state = 0;
//   constructor(x,y,w,h) {
//     this.x = x;
//     this.y = y;
//     this.w = w;
//     this.h = h;
//   }
//
//   setState() {
//     this.state = Math.floor(Math.random() * 2);
//     return this.state;
//   }
//   draw(ctx) {
//     if(state == 1) {
//       ctx.fillStyle = 'white';
//     }
//     ctx.fillRect(this.x, this.y, this.w, this.h);
//   }
// }
