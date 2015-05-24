/*
 Copyright (c) 2010, Yahoo! Inc. All rights reserved.
 Code licensed under the BSD License:
 http://developer.yahoo.com/yui/license.html
 version: 3.3.0
 build: 3167
 */
YUI.add('slider-value-range',function(Y){var MIN='min',MAX='max',VALUE='value',round=Math.round;function SliderValueRange(){this._initSliderValueRange();}
Y.SliderValueRange=Y.mix(SliderValueRange,{prototype:{_factor:1,_initSliderValueRange:function(){},_bindValueLogic:function(){this.after({minChange:this._afterMinChange,maxChange:this._afterMaxChange,valueChange:this._afterValueChange});},_syncThumbPosition:function(){this._calculateFactor();this._setPosition(this.get(VALUE));},_calculateFactor:function(){var length=this.get('length'),thumbSize=this.thumb.getStyle(this._key.dim),min=this.get(MIN),max=this.get(MAX);length=parseFloat(length,10)||150;thumbSize=parseFloat(thumbSize,10)||15;this._factor=(max-min)/(length-thumbSize);},_defThumbMoveFn:function(e){var previous=this.get(VALUE),value=this._offsetToValue(e.offset);if(previous!==value){this.set(VALUE,value,{positioned:true});}},_offsetToValue:function(offset){var value=round(offset*this._factor)+this.get(MIN);return round(this._nearestValue(value));},_valueToOffset:function(value){var offset=round((value-this.get(MIN))/ this._factor);return offset;},getValue:function(){return this.get(VALUE);},setValue:function(val){return this.set(VALUE,val);},_afterMinChange:function(e){this._verifyValue();this._syncThumbPosition();},_afterMaxChange:function(e){this._verifyValue();this._syncThumbPosition();},_verifyValue:function(){var value=this.get(VALUE),nearest=this._nearestValue(value);if(value!==nearest){this.set(VALUE,nearest);}},_afterValueChange:function(e){if(!e.positioned){this._setPosition(e.newVal);}},_setPosition:function(value){this._uiMoveThumb(this._valueToOffset(value));},_validateNewMin:function(value){return Y.Lang.isNumber(value);},_validateNewMax:function(value){return Y.Lang.isNumber(value);},_setNewValue:function(value){return round(this._nearestValue(value));},_nearestValue:function(value){var min=this.get(MIN),max=this.get(MAX),tmp;tmp=(max>min)?max:min;min=(max>min)?min:max;max=tmp;return(value<min)?min:(value>max)?max:value;}},ATTRS:{min:{value:0,validator:'_validateNewMin'},max:{value:100,validator:'_validateNewMax'},value:{value:0,setter:'_setNewValue'}}},true);},'3.3.0',{requires:['slider-base']});