(function($){var Canvas=function(cls,container){var element=container.getElementsByClassName(cls)[0];if(!element){element=document.createElement('canvas');element.className=cls;element.style.direction='ltr';element.style.position='absolute';element.style.left='0px';element.style.top='0px';container.appendChild(element);if(!element.getContext){throw new Error('Canvas is not available.');}}
this.element=element;var context=this.context=element.getContext('2d');this.pixelRatio=$.plot.browser.getPixelRatio(context);var width=$(container).width();var height=$(container).height();this.resize(width,height);this.SVGContainer=null;this.SVG={};this._textCache={};}
Canvas.prototype.resize=function(width,height){var minSize=10;width=width<minSize?minSize:width;height=height<minSize?minSize:height;var element=this.element,context=this.context,pixelRatio=this.pixelRatio;if(this.width!==width){element.width=width*pixelRatio;element.style.width=width+'px';this.width=width;}
if(this.height!==height){element.height=height*pixelRatio;element.style.height=height+'px';this.height=height;}
context.restore();context.save();context.scale(pixelRatio,pixelRatio);};Canvas.prototype.clear=function(){this.context.clearRect(0,0,this.width,this.height);};Canvas.prototype.render=function(){var cache=this._textCache;for(var layerKey in cache){if(hasOwnProperty.call(cache,layerKey)){var layer=this.getSVGLayer(layerKey),layerCache=cache[layerKey];var display=layer.style.display;layer.style.display='none';for(var styleKey in layerCache){if(hasOwnProperty.call(layerCache,styleKey)){var styleCache=layerCache[styleKey];for(var key in styleCache){if(hasOwnProperty.call(styleCache,key)){var val=styleCache[key],positions=val.positions;for(var i=0,position;positions[i];i++){position=positions[i];if(position.active){if(!position.rendered){layer.appendChild(position.element);position.rendered=true;}}else{positions.splice(i--,1);if(position.rendered){while(position.element.firstChild){position.element.removeChild(position.element.firstChild);}
position.element.parentNode.removeChild(position.element);}}}
if(positions.length===0){if(val.measured){val.measured=false;}else{delete styleCache[key];}}}}}}
layer.style.display=display;}}};Canvas.prototype.getSVGLayer=function(classes){var layer=this.SVG[classes];if(!layer){var svgElement;if(!this.SVGContainer){this.SVGContainer=document.createElement('div');this.SVGContainer.className='flot-svg';this.SVGContainer.style.position='absolute';this.SVGContainer.style.top='0px';this.SVGContainer.style.left='0px';this.SVGContainer.style.height='100%';this.SVGContainer.style.width='100%';this.SVGContainer.style.pointerEvents='none';this.element.parentNode.appendChild(this.SVGContainer);svgElement=document.createElementNS('http://www.w3.org/2000/svg','svg');svgElement.style.width='100%';svgElement.style.height='100%';this.SVGContainer.appendChild(svgElement);}else{svgElement=this.SVGContainer.firstChild;}
layer=document.createElementNS('http://www.w3.org/2000/svg','g');layer.setAttribute('class',classes);layer.style.position='absolute';layer.style.top='0px';layer.style.left='0px';layer.style.bottom='0px';layer.style.right='0px';svgElement.appendChild(layer);this.SVG[classes]=layer;}
return layer;};Canvas.prototype.getTextInfo=function(layer,text,font,angle,width){var textStyle,layerCache,styleCache,info;text=''+text;if(typeof font==='object'){textStyle=font.style+' '+font.variant+' '+font.weight+' '+font.size+'px/'+font.lineHeight+'px '+font.family;}else{textStyle=font;}
layerCache=this._textCache[layer];if(layerCache==null){layerCache=this._textCache[layer]={};}
styleCache=layerCache[textStyle];if(styleCache==null){styleCache=layerCache[textStyle]={};}
var key=generateKey(text);info=styleCache[key];if(!info){var element=document.createElementNS('http://www.w3.org/2000/svg','text');if(text.indexOf('<br>')!==-1){addTspanElements(text,element,-9999);}else{var textNode=document.createTextNode(text);element.appendChild(textNode);}
element.style.position='absolute';element.style.maxWidth=width;element.setAttributeNS(null,'x',-9999);element.setAttributeNS(null,'y',-9999);if(typeof font==='object'){element.style.font=textStyle;element.style.fill=font.fill;}else if(typeof font==='string'){element.setAttribute('class',font);}
this.getSVGLayer(layer).appendChild(element);var elementRect=element.getBBox();info=styleCache[key]={width:elementRect.width,height:elementRect.height,measured:true,element:element,positions:[]};while(element.firstChild){element.removeChild(element.firstChild);}
element.parentNode.removeChild(element);}
info.measured=true;return info;};function updateTransforms(element,transforms){element.transform.baseVal.clear();if(transforms){transforms.forEach(function(t){element.transform.baseVal.appendItem(t);});}}
Canvas.prototype.addText=function(layer,x,y,text,font,angle,width,halign,valign,transforms){var info=this.getTextInfo(layer,text,font,angle,width),positions=info.positions;if(halign==='center'){x-=info.width/2;}else if(halign==='right'){x-=info.width;}
if(valign==='middle'){y-=info.height/2;}else if(valign==='bottom'){y-=info.height;}
y+=0.75*info.height;for(var i=0,position;positions[i];i++){position=positions[i];if(position.x===x&&position.y===y&&position.text===text){position.active=true;updateTransforms(position.element,transforms);return;}else if(position.active===false){position.active=true;position.text=text;if(text.indexOf('<br>')!==-1){y-=0.25*info.height;addTspanElements(text,position.element,x);}else{position.element.textContent=text;}
position.element.setAttributeNS(null,'x',x);position.element.setAttributeNS(null,'y',y);position.x=x;position.y=y;updateTransforms(position.element,transforms);return;}}
position={active:true,rendered:false,element:positions.length?info.element.cloneNode():info.element,text:text,x:x,y:y};positions.push(position);if(text.indexOf('<br>')!==-1){y-=0.25*info.height;addTspanElements(text,position.element,x);}else{position.element.textContent=text;}
position.element.setAttributeNS(null,'x',x);position.element.setAttributeNS(null,'y',y);position.element.style.textAlign=halign;updateTransforms(position.element,transforms);};var addTspanElements=function(text,element,x){var lines=text.split('<br>'),tspan,i,offset;for(i=0;i<lines.length;i++){if(!element.childNodes[i]){tspan=document.createElementNS('http://www.w3.org/2000/svg','tspan');element.appendChild(tspan);}else{tspan=element.childNodes[i];}
tspan.textContent=lines[i];offset=(i===0?0:1)+'em';tspan.setAttributeNS(null,'dy',offset);tspan.setAttributeNS(null,'x',x);}}
Canvas.prototype.removeText=function(layer,x,y,text,font,angle){var info,htmlYCoord;if(text==null){var layerCache=this._textCache[layer];if(layerCache!=null){for(var styleKey in layerCache){if(hasOwnProperty.call(layerCache,styleKey)){var styleCache=layerCache[styleKey];for(var key in styleCache){if(hasOwnProperty.call(styleCache,key)){var positions=styleCache[key].positions;positions.forEach(function(position){position.active=false;});}}}}}}else{info=this.getTextInfo(layer,text,font,angle);positions=info.positions;positions.forEach(function(position){htmlYCoord=y+0.75*info.height;if(position.x===x&&position.y===htmlYCoord&&position.text===text){position.active=false;}});}};Canvas.prototype.clearCache=function(){var cache=this._textCache;for(var layerKey in cache){if(hasOwnProperty.call(cache,layerKey)){var layer=this.getSVGLayer(layerKey);while(layer.firstChild){layer.removeChild(layer.firstChild);}}};this._textCache={};};function generateKey(text){return text.replace(/0|1|2|3|4|5|6|7|8|9/g,'0');}
if(!window.Flot){window.Flot={};}
window.Flot.Canvas=Canvas;})(jQuery);appendChild(this.SVGContainer);

                svgElement = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
                svgElement.style.width = '100%';
                svgElement.style.height = '100%';

                this.SVGContainer.appendChild(svgElement);
            } else {
                svgElement = this.SVGContainer.firstChild;
            }

            layer = document.createElementNS('http://www.w3.org/2000/svg', 'g');
            layer.setAttribute('class', classes);
            layer.style.position = 'absolute';
            layer.style.top = '0px';
            layer.style.left = '0px';
            layer.style.bottom = '0px';
            layer.style.right = '0px';
            svgElement.appendChild(layer);
            this.SVG[classes] = layer;
        }

        return layer;
    };

    /**
    - getTextInfo(layer, text, font, angle, width)

     Creates (if necessary) and returns a text info object.
     The object looks like this:
     ```js
     {
         width //Width of the text's wrapper div.
         height //Height of the text's wrapper div.
         element //The HTML div containing the text.
         positions //Array of positions at which this text is drawn.
      }
      ```
      The positions array contains objects that look like this:
      ```js
      {
         active //Flag indicating whether the text should be visible.
         rendered //Flag indicating whether the text is currently visible.
         element //The HTML div containing the text.
         text //The actual text and is identical with element[0].textContent.
         x //X coordinate at which to draw the text.
         y //Y coordinate at which to draw the text.
      }
      ```
      Each position after the first receives a clone of the original element.
      The idea is that that the width, height, and general 'identity' of the
      text is constant no matter where it is placed; the placements are a
      secondary property.

      Canvas maintains a cache of recently-used text info objects; getTextInfo
      either returns the cached element or creates a new entry.

     The layer parameter is string of space-separated CSS classes uniquely
     identifying the layer containing this text.
     Text is the text string to retrieve info for.
     Font is either a string of space-separated CSS classes or a font-spec object,
     defining the text's font and style.
     Angle is the angle at which to rotate the text, in degrees. Angle is currently unused,
     it will be implemented in the future.
     The last parameter is the Maximum width of the text before it wraps.
     The method returns a text info object.
    */
    Canvas.prototype.getTextInfo = function(layer, text, font, angle, width) {
        var textStyle, layerCache, styleCache, info;

        // Cast the value to a string, in case we were given a number or such

        text = '' + text;

        // If the font is a font-spec object, generate a CSS font definition

        if (typeof font === 'object') {
            textStyle = font.style + ' ' + font.variant + ' ' + font.weight + ' ' + font.size + 'px/' + font.lineHeight + 'px ' + font.family;
        } else {
            textStyle = font;
        }

        // Retrieve (or create) the cache for the text's layer and styles

        layerCache = this._textCache[layer];

        if (layerCache == null) {
            layerCache = this._textCache[layer] = {};
        }

        styleCache = layerCache[textStyle];

        if (styleCache == null) {
            styleCache = layerCache[textStyle] = {};
        }

        var key = generateKey(text);
        info = styleCache[key];

        // If we can't find a matching element in our cache, create a new one

        if (!info) {
            var element = document.createElementNS('http://www.w3.org/2000/svg', 'text');
            if (text.indexOf('<br>') !== -1) {
                addTspanElements(text, element, -9999);
            } else {
                var textNode = document.createTextNode(text);
                element.appendChild(textNode);
            }

            element.style.position = 'absolute';
            element.style.maxWidth = width;
            element.setAttributeNS(null, 'x', -9999);
            element.setAttributeNS(null, 'y', -9999);

            if (typeof font === 'object') {
                element.style.font = textStyle;
                element.style.fill = font.fill;
            } else if (typeof font === 'string') {
                element.setAttribute('class', font);
            }

            this.getSVGLayer(layer).appendChild(element);
            var elementRect = element.getBBox();

            info = styleCache[key] = {
                width: elementRect.width,
                height: elementRect.height,
                measured: true,
                element: element,
                positions: []
            };

            //remove elements from dom
            while (element.firstChild) {
                element.removeChild(element.firstChild);
            }
            element.parentNode.removeChild(element);
        }

        info.measured = true;
        return info;
    };

    function updateTransforms (element, transforms) {
        element.transform.baseVal.clear();
        if (transforms) {
            transforms.forEach(function(t) {
                element.transform.baseVal.appendItem(t);
            });
        }
    }

    /**
    - addText (layer, x, y, text, font, angle, width, halign, valign, transforms)

     Adds a text string to the canvas text overlay.
     The text isn't drawn immediately; it is marked as rendering, which will
     result in its addition to the canvas on the next render pass.

     The layer is string of space-separated CSS classes uniquely
     identifying the layer containing this text.
     X and Y represents the X and Y coordinate at which to draw the text.
     and text is the string to draw
    */
    Canvas.prototype.addText = function(layer, x, y, text, font, angle, width, halign, valign, transforms) {
        var info = this.getTextInfo(layer, text, font, angle, width),
            positions = info.positions;

        // Tweak the div's position to match the text's alignment

        if (halign === 'center') {
            x -= info.width / 2;
        } else if (halign === 'right') {
            x -= info.width;
        }

        if (valign === 'middle') {
            y -= info.height / 2;
        } else if (valign === 'bottom') {
            y -= info.height;
        }

        y += 0.75 * info.height;

        // Determine whether this text already exists at this position.
        // If so, mark it for inclusion in the next render pass.

        for (var i = 0, position; positions[i]; i++) {
            position = positions[i];
            if (position.x === x && position.y === y && position.text === text) {
                position.active = true;
                // update the transforms
                updateTransforms(position.element, transforms);

                return;
            } else if (position.active === false) {
                position.active = true;
                position.text = text;
                if (text.indexOf('<br>') !== -1) {
                    y -= 0.25 * info.height;
                    addTspanElements(text, position.element, x);
                } else {
                    position.element.textContent = text;
                }
                position.element.setAttributeNS(null, 'x', x);
                position.element.setAttributeNS(null, 'y', y);
                position.x = x;
                position.y = y;
                // update the transforms
                updateTransforms(position.element, transforms);

                return;
            }
        }

        // If the text doesn't exist at this position, create a new entry

        // For the very first position we'll re-use the original element,
        // while for subsequent ones we'll clone it.

        position = {
            active: true,
            rendered: false,
            element: positions.length ? info.element.cloneNode() : info.element,
            text: text,
            x: x,
            y: y
        };

        positions.push(position);

        if (text.indexOf('<br>') !== -1) {
            y -= 0.25 * info.height;
            addTspanElements(text, position.element, x);
        } else {
            position.element.textContent = text;
        }

        // Move the element to its final position within the container
        position.element.setAttributeNS(null, 'x', x);
        position.element.setAttributeNS(null, 'y', y);
        position.element.style.textAlign = halign;
        // update the transforms
        updateTransforms(position.element, transforms);
    };

    var addTspanElements = function(text, element, x) {
        var lines = text.split('<br>'),
            tspan, i, offset;

        for (i = 0; i < lines.length; i++) {
            if (!element.childNodes[i]) {
                tspan = document.createElementNS('http://www.w3.org/2000/svg', 'tspan');
                element.appendChild(tspan);
            } else {
                tspan = element.childNodes[i];
            }
            tspan.textContent = lines[i];
            offset = (i === 0 ? 0 : 1) + 'em';
            tspan.setAttributeNS(null, 'dy', offset);
            tspan.setAttributeNS(null, 'x', x);
        }
    }

    /**
    - removeText (layer, x, y, text, font, angle)

      The function removes one or more text strings from the canvas text overlay.
      If no parameters are given, all text within the layer is removed.

      Note that the text is not immediately removed; it is simply marked as
      inactive, which will result in its removal on the next render pass.
      This avoids the performance penalty for 'clear and redraw' behavior,
      where we potentially get rid of all text on a layer, but will likely
      add back most or all of it later, as when redrawing axes, for example.

      The layer is a string of space-separated CSS classes uniquely
      identifying the layer containing this text. The following parameter are
      X and Y coordinate of the text.
      Text is the string to remove, while the font is either a string of space-separated CSS
      classes or a font-spec object, defining the text's font and style.
     */
    Canvas.prototype.removeText = function(layer, x, y, text, font, angle) {
        var info, htmlYCoord;
        if (text == null) {
            var layerCache = this._textCache[layer];
            if (layerCache != null) {
                for (var styleKey in layerCache) {
                    if (hasOwnProperty.call(layerCache, styleKey)) {
                        var styleCache = layerCache[styleKey];
                        for (var key in styleCache) {
                            if (hasOwnProperty.call(styleCache, key)) {
                                var positions = styleCache[key].positions;
                                positions.forEach(function(position) {
                                    position.active = false;
                                });
                            }
                        }
                    }
                }
            }
        } else {
            info = this.getTextInfo(layer, text, font, angle);
            positions = info.positions;
            positions.forEach(function(position) {
                htmlYCoord = y + 0.75 * info.height;
                if (position.x === x && position.y === htmlYCoord && position.text === text) {
                    position.active = false;
                }
            });
        }
    };

    /**
    - clearCache()

     Clears the cache used to speed up the text size measurements.
     As an (unfortunate) side effect all text within the text Layer is removed.
     Use this function before plot.setupGrid() and plot.draw() if the plot just
     became visible or the styles changed.
    */
    Canvas.prototype.clearCache = function() {
        var cache = this._textCache;
        for (var layerKey in cache) {
            if (hasOwnProperty.call(cache, layerKey)) {
                var layer = this.getSVGLayer(layerKey);
                while (layer.firstChild) {
                    layer.removeChild(layer.firstChild);
                }
            }
        };

        this._textCache = {};
    };

    function generateKey(text) {
        return text.replace(/0|1|2|3|4|5|6|7|8|9/g, '0');
    }

    if (!window.Flot) {
        window.Flot = {};
    }

    window.Flot.Canvas = Canvas;
})(jQuery);
