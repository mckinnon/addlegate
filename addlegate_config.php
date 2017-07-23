<?php

// There are several ways to customize Addlegate for your site.

// Timing
$addlegate_delay = '2'; // Wait before display. Minimum recommended: 3. The delay should be longer than required to load the whole page.
$addlegate_fade = '3';  // Time for screen to fade in and alert to display.

// Alert text and style
$addlegate_message = "<h1>Ad blocker detected! :(</h1><p>Advertising pays our writers. Please add an exception for our site to your ad blocker.</p>";
$addlegate_alertcss = 'opacity: inherit; position: relative; top: 200px; margin: auto; width: 50%; padding: 10px; background: #fff; border-radius: 15px; border: 5px solid #000; font-family: Helvetica, Arial, sans-serif;';

// Background screen.
$addlegate_bgshape = 'dot'; // options: none, dot, grid, vstripe, hstripe, solid, custom
$addlegate_bgcolor = '#085418';
$addlegate_bgopacity = '0.7';
$addlegate_customsvg = '<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" width="100" height="100" version="1.1"><style>.s0{fill:#000080;}.s1{fill:#085418;}.s2{fill:none;stroke-width:4.2;stroke:#00cc13;}.s3{fill:none;stroke-width:10;stroke:#00cc13;}.s4{fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:10;stroke:#00cc13;}.s5{fill:#000080;stroke-linecap:round;stroke-linejoin:round;stroke-width:10;stroke:#f00;}.s6{fill:#085418;stroke-linecap:round;stroke-linejoin:round;stroke-width:4.8;stroke:#000080;}.s7{fill:#085418;stroke-linecap:round;stroke-linejoin:round;stroke-width:10;stroke:#000080;}</style><path d="m60.7 50.62c-0.42 0.68-1.52 0.86-2.02 0.35-0.37-0.38-1.62-0.2-1.82 0.28-0.62 1.36-0.67 1.39-1.87 1.34-1.45-0.08-2.12 0.28-2.12 1.09 0 0.86-0.8 1.59-1.57 1.47-1.07-0.2-1.67 0.33-1.67 1.44 0 1.11-0.5 1.77-1.35 1.77-0.32 0-0.77 0.23-1.02 0.51-0.4 0.45-0.42 0.63-0.15 1.52 0.35 1.16 0.27 1.36-0.72 1.9-0.97 0.51-1.17 1.42-0.52 2.3 0.7 0.91 0.67 1.24-0.22 2.05-0.92 0.83-0.95 1.34-0.12 2.33 0.35 0.4 0.62 0.91 0.62 1.11 0 0.2-0.27 0.61-0.62 0.91-0.8 0.71-0.8 1.31 0 2.07 0.75 0.71 0.77 1.11 0.12 1.95-0.27 0.35-0.5 0.96-0.5 1.34 0 0.38 0.22 0.88 0.5 1.14 0.67 0.61 0.62 1.19-0.12 1.84-0.75 0.66-0.8 1.29-0.12 2.15 0.67 0.86 0.62 1.09-0.25 1.74-0.95 0.71-1.15 1.34-0.65 2.1 0.55 0.86 0.27 1.39-0.72 1.39-0.97 0-1.62 0.56-1.62 1.36 0 0.33-0.17 0.73-0.4 0.91-0.32 0.28-0.52 0.25-1.12-0.1-0.87-0.53-1.52-0.38-2.09 0.48-0.55 0.83-1.07 0.78-1.59-0.13-0.52-0.91-1.17-1.16-1.94-0.76-0.47 0.25-0.7 0.25-1.22-0.1-0.35-0.23-0.8-0.73-1-1.14-0.32-0.66-2.09-2.22-2.24-2.02-0.02 0.05-0.2 0.56-0.4 1.16-0.3 0.96-0.27 1.14 0.15 1.77 0.9 1.36 1.1 2.02 0.77 2.83-0.37 1.01 0.07 2.05 0.9 2.05 0.82 0 1.42 0.76 1.42 1.82 0 1.14 0.72 1.84 1.62 1.62 0.87-0.23 1.55 0.2 1.74 1.14 0.22 1.06 1.17 1.49 2.07 0.99 0.85-0.48 1.72-0.28 2.12 0.53 0.4 0.83 1.3 0.94 2.19 0.28 0.9-0.68 1.12-0.66 2.02 0.1 0.97 0.83 1.57 0.81 2.24-0.13 0.65-0.88 1.15-0.96 2.02-0.25 0.35 0.28 0.8 0.51 1 0.51 0.4 0 1.02-0.66 1.27-1.34 0.17-0.51 1.1-0.58 2.02-0.15 0.82 0.38 1.82-0.05 1.92-0.83 0.12-0.86 0.8-1.16 1.72-0.81 1.02 0.38 1.59 0.08 2.17-1.14 0.42-0.91 0.47-0.94 1.79-0.94 1.3 0 1.37-0.03 1.62-0.78 0.42-1.34 0.82-1.64 1.87-1.47 0.8 0.13 1 0.05 1.35-0.43 0.22-0.33 0.4-0.83 0.4-1.11 0-0.78 0.47-1.14 1.55-1.14 0.72 0 1.02-0.15 1.35-0.63 0.22-0.35 0.35-0.76 0.3-0.96-0.22-0.66 0.32-1.21 1.2-1.21 1.1 0 1.97-0.81 1.77-1.62-0.2-0.81 0.47-1.67 1.32-1.67 1 0 1.62-0.78 1.4-1.77-0.2-0.94 0.17-1.52 1-1.52 0.95 0 1.45-0.81 1.25-2.07-0.15-1.06-0.12-1.14 0.85-1.92 1.15-0.94 1.25-1.34 0.52-2.25-0.67-0.86-0.62-1.11 0.25-1.97 0.92-0.88 0.95-1.49 0.12-2.25-0.75-0.71-0.8-1.42-0.12-2.05 0.82-0.76 0.6-2.02-0.4-2.43-0.7-0.28-0.82-1.49-0.22-2 0.2-0.18 0.37-0.51 0.37-0.76 0-0.48-0.75-1.26-1.2-1.26-0.15 0-0.47-0.28-0.7-0.63-0.35-0.56-0.37-0.73-0.1-1.26 0.45-0.86 0-1.82-0.92-2.02-1.17-0.25-1.45-0.51-1.52-1.54-0.1-1.29-0.42-1.62-1.55-1.62-1.02 0-1.72-0.51-1.72-1.24 0-0.91-1.69-1.74-2.12-1.04-0.07 0.13-0.37 0.25-0.65 0.25-0.45 0-0.8-0.3-1.67-1.36-0.4-0.51-1.4-0.51-1.79-0.03-0.45 0.53-1.59 0.48-2.12-0.13-0.65-0.71-1.77-0.66-2.27 0.13z" fill="#000080"/><path class="s2" d="m67.72 69.45c0.4-2.33-2.62-5.94-4.96-5.84-3.16 0.13-5.53 3.74-5.71 7.4-0.5 9.6-1.79 11.37-3.19 15.8 2.09-1.26 11.74-5.18 13.86-17.36z" style="fill:#085418;stroke-width:1.05;stroke:#00cc13"/><path class="s3" d="M75.52 64.77C75.17 60.35 69.74 53.81 62.59 53.81c-7.13 0-13.51 7.05-13.03 13.9 1.07 15.77-1.05 24.56-11.59 25.35 3.12 5.21 39.92 0.81 37.55-28.28z" style="fill:none;stroke-width:2.51;stroke:#00cc13"/><path class="s7" d="m55.87 44.96c0-0.91-0.73-1.65-1.63-1.65-0.9 0-1.63 0.74-1.63 1.65 0 0.91 0.73 1.65 1.63 1.65 0.9 0 1.63-0.74 1.63-1.65z" style="fill:#000080;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.73;stroke:#000080"/><path d="M0 27.59L0 73.09C0.37 73.28 0.88 73.29 1.31 73.09 2.23 72.66 3.14 72.74 3.31 73.25 3.56 73.93 4.2 74.59 4.59 74.59 4.79 74.59 5.24 74.37 5.59 74.09 6.47 73.39 6.98 73.46 7.63 74.34 8.3 75.28 8.87 75.3 9.84 74.47 10.74 73.71 10.98 73.69 11.88 74.38 12.77 75.03 13.66 74.93 14.06 74.09 14.46 73.29 15.34 73.08 16.19 73.56 17.08 74.07 18.03 73.62 18.25 72.56 18.45 71.63 19.13 71.21 20 71.44 20.9 71.66 21.63 70.95 21.63 69.81 21.63 68.75 22.21 68 23.03 68 23.85 68 24.31 66.98 23.94 65.97 23.61 65.16 23.82 64.49 24.72 63.13 25.14 62.49 25.14 62.3 24.84 61.34 24.64 60.74 24.49 60.24 24.47 60.19 24.32 59.99 22.54 61.56 22.22 62.22 22.02 62.62 21.57 63.12 21.22 63.34 20.7 63.7 20.47 63.72 20 63.47 19.23 63.06 18.59 63.31 18.06 64.22 17.54 65.13 17.02 65.18 16.47 64.34 15.9 63.48 15.25 63.31 14.38 63.84 13.78 64.2 13.57 64.25 13.25 63.97 13.03 63.79 12.84 63.39 12.84 63.06 12.84 62.25 12.19 61.69 11.22 61.69 10.22 61.69 9.95 61.14 10.5 60.28 11 59.52 10.79 58.9 9.84 58.19 8.97 57.53 8.92 57.33 9.59 56.47 10.27 55.61 10.22 54.97 9.47 54.31 8.72 53.66 8.67 53.08 9.34 52.47 9.62 52.22 9.84 51.69 9.84 51.31 9.84 50.93 9.62 50.32 9.34 49.97 8.7 49.13 8.72 48.74 9.47 48.03 10.27 47.27 10.27 46.68 9.47 45.97 9.12 45.67 8.84 45.26 8.84 45.06 8.84 44.86 9.12 44.34 9.47 43.94 10.29 42.95 10.27 42.46 9.34 41.63 8.45 40.82 8.43 40.47 9.13 39.56 9.77 38.68 9.57 37.79 8.59 37.28 7.6 36.75 7.53 36.54 7.88 35.38 8.15 34.49 8.15 34.33 7.75 33.88 7.5 33.6 7.04 33.34 6.72 33.34 5.87 33.34 5.38 32.71 5.38 31.59 5.38 30.48 4.76 29.95 3.69 30.16 2.91 30.28 2.13 29.55 2.13 28.69 2.13 27.88 1.45 27.52 0 27.59z" fill="#000080"/><path d="M-5 39.72L-5 57.88C-2.34 60.08 0.17 61.24 1.13 61.81 -0.27 57.39-1.56 55.63-2.06 46.03 -2.18 43.55-3.3 41.09-5 39.72z" style="fill:#085418;stroke-width:1.05;stroke:#00cc13"/><path d="M-5 29.13L-5 66.22C4.62 70.87 15.41 70.78 17.03 68.06 6.49 67.28 4.37 58.49 5.44 42.72 5.85 36.72 1 30.55-5 29.13z" style="fill:none;stroke-width:2.51;stroke:#00cc13"/><path class="s5" d="m14.72 25.54c0-0.91 0.73-1.65 1.63-1.65 0.9 0 1.63 0.74 1.63 1.65 0 0.91-0.73 1.65-1.63 1.65-0.9 0-1.63-0.74-1.63-1.65z" style="fill:#085418;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.73;stroke:#f00"/><path class="s6" d="m16.58 52.57c0-2.77 2.22-5.02 4.97-5.02 2.75 0 4.97 2.25 4.97 5.02 0 2.77-2.22 5.02-4.97 5.02-2.75 0-4.97-2.25-4.97-5.02z" style="fill:#085418;stroke-linecap:round;stroke-linejoin:round;stroke-width:2.53;stroke:#000080"/><path d="m74.38 19.3c-0.68 0.42-0.86 1.52-0.35 2.02 0.38 0.37 0.2 1.62-0.28 1.82-1.36 0.62-1.39 0.67-1.34 1.87 0.08 1.45-0.28 2.12-1.09 2.12-0.86 0-1.59 0.8-1.47 1.57 0.2 1.07-0.33 1.67-1.44 1.67-1.11 0-1.77 0.5-1.77 1.35 0 0.32-0.23 0.77-0.51 1.02-0.45 0.4-0.63 0.42-1.52 0.15-1.16-0.35-1.36-0.27-1.9 0.72-0.51 0.97-1.42 1.17-2.3 0.52-0.91-0.7-1.24-0.67-2.05 0.22-0.83 0.92-1.34 0.95-2.33 0.12-0.4-0.35-0.91-0.62-1.11-0.62-0.2 0-0.61 0.27-0.91 0.62-0.71 0.8-1.31 0.8-2.07 0-0.71-0.75-1.11-0.77-1.95-0.12-0.35 0.27-0.96 0.5-1.34 0.5-0.38 0-0.88-0.22-1.14-0.5-0.61-0.67-1.19-0.62-1.84 0.12-0.66 0.75-1.29 0.8-2.15 0.12-0.86-0.67-1.09-0.62-1.74 0.25-0.71 0.95-1.34 1.15-2.1 0.65-0.86-0.55-1.39-0.27-1.39 0.72 0 0.97-0.56 1.62-1.36 1.62-0.33 0-0.73 0.17-0.91 0.4-0.28 0.32-0.25 0.52 0.1 1.12 0.53 0.87 0.38 1.52-0.48 2.09-0.83 0.55-0.78 1.07 0.13 1.59 0.91 0.52 1.16 1.17 0.76 1.94-0.25 0.47-0.25 0.7 0.1 1.22 0.23 0.35 0.73 0.8 1.14 1 0.66 0.32 2.22 2.09 2.02 2.24-0.05 0.02-0.56 0.2-1.16 0.4-0.96 0.3-1.14 0.27-1.77-0.15-1.36-0.9-2.02-1.1-2.83-0.77-1.01 0.37-2.05-0.07-2.05-0.9 0-0.82-0.76-1.42-1.82-1.42-1.14 0-1.84-0.72-1.62-1.62 0.23-0.87-0.2-1.55-1.14-1.74-1.06-0.22-1.49-1.17-0.99-2.07 0.48-0.85 0.28-1.72-0.53-2.12-0.83-0.4-0.94-1.3-0.28-2.19 0.68-0.9 0.66-1.12-0.1-2.02-0.83-0.97-0.81-1.57 0.13-2.24 0.88-0.65 0.96-1.15 0.25-2.02-0.28-0.35-0.51-0.8-0.51-1 0-0.4 0.66-1.02 1.34-1.27 0.51-0.17 0.58-1.1 0.15-2.02-0.38-0.82 0.05-1.82 0.83-1.92 0.86-0.12 1.16-0.8 0.81-1.72-0.38-1.02-0.08-1.59 1.14-2.17 0.91-0.42 0.94-0.47 0.94-1.79 0-1.3 0.03-1.37 0.78-1.62 1.34-0.42 1.64-0.82 1.47-1.87-0.13-0.8-0.05-1 0.43-1.35 0.33-0.22 0.83-0.4 1.11-0.4 0.78 0 1.14-0.47 1.14-1.55 0-0.72 0.15-1.02 0.63-1.35 0.35-0.22 0.76-0.35 0.96-0.3 0.66 0.22 1.21-0.32 1.21-1.2 0-1.1 0.81-1.97 1.62-1.77 0.81 0.2 1.67-0.47 1.67-1.32 0-1 0.78-1.62 1.77-1.4 0.94 0.2 1.52-0.17 1.52-1 0-0.95 0.81-1.45 2.07-1.25 1.06 0.15 1.14 0.12 1.92-0.85 0.94-1.15 1.34-1.25 2.25-0.52 0.86 0.67 1.11 0.62 1.97-0.25 0.88-0.92 1.49-0.95 2.25-0.12 0.71 0.75 1.42 0.8 2.05 0.12 0.76-0.82 2.02-0.6 2.43 0.4 0.28 0.7 1.49 0.82 2 0.22 0.18-0.2 0.51-0.37 0.76-0.37 0.48 0 1.26 0.75 1.26 1.2 0 0.15 0.28 0.47 0.63 0.7 0.56 0.35 0.73 0.37 1.26 0.1 0.86-0.45 1.82 0 2.02 0.92 0.25 1.17 0.51 1.45 1.54 1.52 1.29 0.1 1.62 0.42 1.62 1.55 0 1.02 0.51 1.72 1.24 1.72 0.91 0 1.74 1.69 1.04 2.12-0.13 0.07-0.25 0.37-0.25 0.65 0 0.45 0.3 0.8 1.36 1.67 0.51 0.4 0.51 1.4 0.03 1.79-0.53 0.45-0.48 1.59 0.13 2.12 0.71 0.65 0.66 1.77-0.13 2.27z" fill="#000080"/><path class="s2" d="m55.55 12.28c2.33-0.4 5.94 2.62 5.84 4.96-0.13 3.16-3.74 5.53-7.4 5.71-9.6 0.5-11.37 1.79-15.8 3.19 1.26-2.09 5.18-11.74 17.36-13.86z" style="fill:#085418;stroke-width:1.05;stroke:#00cc13"/><path class="s3" d="M60.23 4.48C64.65 4.83 71.19 10.26 71.19 17.41c0 7.13-7.05 13.51-13.9 13.03C41.52 29.37 32.73 31.49 31.95 42.03 26.74 38.92 31.14 2.11 60.23 4.48z" style="fill:none;stroke-width:2.51;stroke:#00cc13"/><path class="s6" d="m33.7 66.76c2.77 0 5.02 2.22 5.02 4.97 0 2.75-2.25 4.97-5.02 4.97-2.77 0-5.02-2.22-5.02-4.97 0-2.75 2.25-4.97 5.02-4.97z" style="fill:#000080;stroke-linecap:round;stroke-linejoin:round;stroke-width:2.53;stroke:#000080"/><path d="M92.91 25.03C92.59 25.08 92.27 25.27 92.03 25.53 91.51 26.14 90.35 26.19 89.91 25.66 89.51 25.18 88.52 25.18 88.13 25.69 87.25 26.75 86.92 27.03 86.47 27.03 86.19 27.03 85.89 26.91 85.81 26.78 85.39 26.07 83.69 26.9 83.69 27.81 83.69 28.55 82.99 29.06 81.97 29.06 80.85 29.06 80.54 29.4 80.44 30.69 80.36 31.72 80.08 31.97 78.91 32.22 77.98 32.42 77.52 33.39 77.97 34.25 78.24 34.78 78.22 34.94 77.88 35.5 77.65 35.85 77.34 36.13 77.19 36.13 76.74 36.13 76 36.93 76 37.41 76 37.66 76.18 37.98 76.38 38.16 76.97 38.66 76.82 39.88 76.13 40.16 75.13 40.56 74.93 41.84 75.75 42.59 76.42 43.23 76.37 43.92 75.63 44.63 74.8 45.38 74.83 45.99 75.75 46.88 76.62 47.73 76.67 47.98 76 48.84 75.28 49.75 75.35 50.16 76.5 51.09 77.47 51.88 77.49 51.97 77.34 53.03 77.14 54.29 77.65 55.09 78.59 55.09 79.42 55.09 79.79 55.66 79.59 56.59 79.37 57.58 80 58.38 81 58.38 81.85 58.38 82.51 59.22 82.31 60.03 82.11 60.84 83 61.66 84.09 61.66 84.97 61.66 85.51 62.22 85.28 62.88 85.23 63.08 85.37 63.49 85.59 63.84 85.92 64.32 86.21 64.47 86.94 64.47 88.01 64.47 88.47 64.81 88.47 65.59 88.47 65.87 88.65 66.39 88.88 66.72 89.22 67.2 89.42 67.28 90.22 67.16 91.27 66.98 91.67 67.25 92.09 68.59 92.34 69.35 92.42 69.41 93.72 69.41 95.04 69.41 95.08 69.4 95.5 70.31 96.07 71.53 96.63 71.85 97.66 71.47 98.58 71.11 99.25 71.42 99.38 72.28 99.42 72.65 99.67 72.93 100 73.09L100 27.59C98.8 27.64 98.78 27.61 98.16 26.25 97.96 25.77 96.69 25.59 96.31 25.97 95.82 26.47 94.75 26.32 94.31 25.66 94 25.17 93.44 24.94 92.91 25.03z" fill="#000080"/><path class="s2" d="m87.28 44.45c-0.4-2.33 2.62-5.94 4.96-5.84 3.16 0.13 5.53 3.74 5.71 7.4 0.5 9.6 1.79 11.37 3.19 15.8C99.04 60.55 89.39 56.63 87.28 44.45z" style="fill:#085418;stroke-width:1.05;stroke:#00cc13"/><path d="M92.41 28.81C85.25 28.81 79.82 35.36 79.47 39.78 77.91 58.96 93.39 67.4 105 69.44L105 38.78C103.44 33.4 98.16 28.81 92.41 28.81z" style="fill:none;stroke-width:2.51;stroke:#00cc13"/><path d="M90.63 0C90.36 0.36 90.16 0.94 90.16 1.31 90.16 1.69 90.38 2.22 90.66 2.47 91.33 3.08 91.28 3.66 90.53 4.31 89.78 4.97 89.73 5.61 90.41 6.47 91.08 7.33 91.03 7.53 90.16 8.19 89.21 8.9 89 9.52 89.5 10.28 90.05 11.14 89.78 11.69 88.78 11.69 87.81 11.69 87.16 12.25 87.16 13.06 87.16 13.39 86.97 13.79 86.75 13.97 86.43 14.25 86.22 14.2 85.63 13.84 84.75 13.31 84.1 13.48 83.53 14.34 82.98 15.18 82.46 15.13 81.94 14.22 81.41 13.31 80.77 13.06 80 13.47 79.53 13.72 79.3 13.7 78.78 13.34 78.43 13.12 77.98 12.62 77.78 12.22 77.46 11.56 75.68 9.99 75.53 10.19 75.51 10.24 75.36 10.74 75.16 11.34 74.86 12.3 74.86 12.49 75.28 13.13 76.18 14.49 76.39 15.16 76.06 15.97 75.69 16.98 76.15 18 76.97 18 77.79 18 78.38 18.75 78.38 19.81 78.38 20.95 79.1 21.66 80 21.44 80.87 21.21 81.55 21.63 81.75 22.56 81.97 23.62 82.92 24.07 83.81 23.56 84.66 23.08 85.54 23.29 85.94 24.09 86.34 24.93 87.23 25.03 88.13 24.38 89.02 23.69 89.26 23.71 90.16 24.47 91.13 25.3 91.7 25.28 92.38 24.34 93.02 23.46 93.53 23.39 94.41 24.09 94.76 24.37 95.21 24.59 95.41 24.59 95.8 24.59 96.44 23.93 96.69 23.25 96.86 22.74 97.77 22.66 98.69 23.09 99.12 23.29 99.62 23.27 100 23.09L100 0 90.63 0z" fill="#000080"/><path d="M102.19-5C102.13-4.66 102.08-4.31 102.06-3.97 101.56 5.63 100.27 7.39 98.88 11.81 99.83 11.24 102.34 10.09 105 7.88L105-5 102.19-5z" style="fill:#085418;stroke-width:1.05;stroke:#00cc13"/><path d="M94.69-5C95.39 9.33 92.99 17.32 82.97 18.06 84.59 20.78 95.39 20.89 105 16.25L105-5 94.69-5z" style="fill:none;stroke-width:2.51;stroke:#00cc13"/><path d="M0 0L0 23.09C0.34 22.93 0.58 22.65 0.63 22.28 0.75 21.42 1.42 21.11 2.34 21.47 3.37 21.85 3.93 21.53 4.5 20.31 4.92 19.4 4.96 19.41 6.28 19.41 7.58 19.41 7.66 19.35 7.91 18.59 8.33 17.25 8.73 16.98 9.78 17.16 10.58 17.28 10.78 17.2 11.13 16.72 11.35 16.39 11.53 15.87 11.53 15.59 11.53 14.81 11.99 14.47 13.06 14.47 13.79 14.47 14.08 14.32 14.41 13.84 14.63 13.49 14.77 13.08 14.72 12.88 14.49 12.22 15.03 11.66 15.91 11.66 17 11.66 17.89 10.84 17.69 10.03 17.49 9.22 18.15 8.38 19 8.38 20 8.38 20.63 7.58 20.41 6.59 20.21 5.66 20.58 5.09 21.41 5.09 22.35 5.09 22.86 4.29 22.66 3.03 22.51 1.97 22.53 1.88 23.5 1.09 24.06 0.64 24.35 0.32 24.44 0L0 0z" fill="#000080"/><path d="M2.19-5C2.13-4.66 2.08-4.31 2.06-3.97 1.56 5.63 0.27 7.39-1.12 11.81 0.94 10.57 10.31 6.74 12.63-5L2.19-5z" style="fill:#085418;stroke-width:1.05;stroke:#00cc13"/><path d="M-5-4.72L-5 19.44C5.44 17.61 18.99 10.6 20.5-4.72L-5-4.72z" style="fill:none;stroke-width:2.51;stroke:#00cc13"/><path d="M6.78 75.03C6.36 75.05 5.94 75.26 5.69 75.66 5.25 76.32 4.18 76.47 3.69 75.97 3.31 75.59 2.04 75.77 1.84 76.25 1.22 77.61 1.2 77.64 0 77.59L0 100 24.44 100C24.52 99.66 24.37 99.31 24 98.84 23.33 97.98 23.38 97.73 24.25 96.88 25.17 95.99 25.2 95.38 24.38 94.63 23.63 93.92 23.58 93.23 24.25 92.59 25.07 91.84 24.87 90.56 23.88 90.16 23.18 89.88 23.03 88.66 23.63 88.16 23.82 87.98 24 87.66 24 87.41 24 86.93 23.26 86.13 22.81 86.13 22.66 86.13 22.35 85.85 22.13 85.5 21.78 84.94 21.76 84.78 22.03 84.25 22.48 83.39 22.02 82.42 21.09 82.22 19.92 81.97 19.64 81.72 19.56 80.69 19.46 79.4 19.15 79.06 18.03 79.06 17.01 79.06 16.31 78.55 16.31 77.81 16.31 76.9 14.61 76.07 14.19 76.78 14.11 76.91 13.81 77.03 13.53 77.03 13.08 77.03 12.75 76.75 11.88 75.69 11.48 75.18 10.49 75.18 10.09 75.66 9.65 76.19 8.49 76.14 7.97 75.53 7.64 75.18 7.2 75.01 6.78 75.03z" fill="#000080"/><path d="M7.75 88.63C4.59 88.75 2.24 92.37 2.06 96.03 1.84 100.26 1.47 102.91 1 105L7.94 105C10.07 102.46 11.92 99.03 12.72 94.44 13.12 92.11 10.09 88.52 7.75 88.63z" style="fill:#085418;stroke-width:1.05;stroke:#00cc13"/><path d="M7.59 78.81C1.84 78.81-3.44 83.4-5 88.78L-5 105 17.47 105C19.76 100.93 21.03 95.9 20.53 89.78 20.18 85.36 14.75 78.81 7.59 78.81z" style="fill:none;stroke-width:2.51;stroke:#00cc13"/><path d="M100 77.59C98.55 77.52 97.88 77.88 97.88 78.69 97.88 79.55 97.09 80.28 96.31 80.16 95.24 79.95 94.63 80.48 94.63 81.59 94.63 82.71 94.13 83.34 93.28 83.34 92.96 83.34 92.5 83.6 92.25 83.88 91.85 84.33 91.85 84.49 92.13 85.38 92.47 86.54 92.4 86.75 91.41 87.28 90.43 87.79 90.23 88.68 90.88 89.56 91.57 90.47 91.55 90.82 90.66 91.63 89.73 92.46 89.71 92.95 90.53 93.94 90.88 94.34 91.16 94.86 91.16 95.06 91.16 95.26 90.88 95.67 90.53 95.97 89.73 96.68 89.73 97.27 90.53 98.03 91.28 98.74 91.3 99.13 90.66 99.97 90.65 99.98 90.63 99.99 90.63 100L100 100 100 77.59z" fill="#000080"/><path d="M104.97 79.13C98.98 80.57 94.15 86.73 94.56 92.72 94.88 97.46 94.9 101.55 94.5 105L105 105 105 79.13C104.99 79.13 104.98 79.12 104.97 79.13z" style="fill:none;stroke-width:2.51;stroke:#00cc13"/><path class="s5" d="m81.36 84.29c0-0.91 0.73-1.65 1.63-1.65 0.9 0 1.63 0.74 1.63 1.65 0 0.91-0.73 1.65-1.63 1.65-0.9 0-1.63-0.74-1.63-1.65z" style="fill:#085418;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.73;stroke:#f00"/></svg>';


/* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */
// Please do not change the settings below. The URL and key were paired when
// you registered. If the key has been compromised, please contact support if
// to obtain a new one. https://support.addlegate.com

$url = '...'; 
$key = '22f77155865170ef'; //generated with bin2hex(openssl_random_pseudo_bytes(8));

?>