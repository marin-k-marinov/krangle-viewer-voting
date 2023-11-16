# krangle-viewer

Tool to collaboratievly explore Krangled Path of Exile skill tree and generate `.json` node pairs for the Path of Exile Krangled Passives event. I have added weighted values for each node based on number of submits.

Largely based on [krangle-viewer by joonazan on github](https://github.com/joonazan/krangle-viewer/) with modifications inspired by [ellomenop on github](https://github.com/ellomenop/krangle-viewer) and oldling.

This tool can be hosted as a website (e.g. on github pages) but I recommend just downloading and running it locally for simplicity.


## How to Use
- download this repository with `git` or just click `Code > Download ZIP` on github 
- open `index.html` in your browser (e.g. double click on `[...]/Downloads/krangle-viewer/index.html`)
- host it on php environment (xampp or shared hosting)
- click on a node, then use the top left search bar to find its appropriate replacement and click it
- click 'Copy info to clipboard' to copy your changes so far in `.json` format
- save your changes into a file (e.g. open Notepad, paste the `.json` and save it as `my_krangled_passives.json`)
- convert them to PoB format using another tool (for example, [my krangler python code](https://github.com/efunn/krangler))
- your changes are 'saved' in your browsers local storage, so if you close `index.html` and open it again, your changes will reappear
- IF YOU CLICK 'Reset to default' YOUR CHANGES WILL BE GONE FOREVER (so make sure to save a copy of `my_krangled_passives.json` periodically)

## Features (relative to original tool by joonazan)
- tree updates automatically on node replacement clicked
- search bar automatically focuses when node initially clicked
- search bar has a solid background and automatically shows/hides on click

## Limitations
- node icons are krangled (sorry!) due to using older javascript skill tree data (I think this could easily be fixed by pulling newer javascript from GGG but I didn't want to break anything else)
- ascendancy input is fairly krangled but doable
  - select class and ascendancy at bottom left
  - may need to scroll in/out to 'reveal' the ascendancy tree pop-out
  - replace your node as normal
  - your ascendancy tree will disappear!
  - refresh the page (e.g. using `F5` or `ctrl-R`)
  - re-select your class and ascendancy at bottom left
  - your changes will now appear
  - this is pretty annoying but at least there aren't that many ascendancy nodes!

