var MyWidget = Class.extend({

    init:function (obj) {
        this.wrapper = this.elem || jQuery('.' + obj.wrapper);
        this.elems = this.elem || jQuery(this.wrapper).children();
        this.autoScrollPause = obj.autoScrollPause || 5000;
    }

});

var FadeToggle = MyWidget.extend({

    init:function (obj) {
        this._super(obj);

        this.currentVisClass = obj.wrapper + obj.elem + obj.onMod;
        this.currentVis = jQuery('.' + this.currentVisClass);

        this.toggleImg(this.currentVis);

    },

    getNextImg:function (elem) {
        var next = jQuery(elem).next();

        if (!next.length) next = jQuery(this.wrapper).children().eq(0);

        return next;
    },

    toggleImg:function (showMod) {

        var that = this;

        setTimeout(function () {

            that.nextElem = that.getNextImg(showMod);

            if (!that.nextElem.length) return;

            jQuery(that.currentVis).removeClass(that.currentVisClass);
            jQuery(that.nextElem).addClass(that.currentVisClass);

            that.currentVis = that.nextElem;

            that.toggleImg(that.nextElem);

        }, that.autoScrollPause)
    }

});

var MyScroller = MyWidget.extend({
    init:function (obj) {
        this._super(obj);

        var that = this;

        this.scrollStep = obj.elemHeight;
        this.stop = this.scrollStep * (this.elems.length - 2) * -1;
        this.sliderPosition = 0;

        this.autoScroll(this.wrapper, this.scrollStep, this.stop);

        jQuery('.arrow').bind('click', function () {
            that.scroll(that.wrapper, that.scrollStep, that.stop);
        });
    },

    autoScroll:function (elem, scrollStep, stop) {

        var that = this;

        setTimeout(function () {

            that.scroll(elem, scrollStep, stop)

            that.autoScroll(elem, scrollStep, stop);

        }, that.autoScrollPause)
    },

    scroll:function (elem, scrollStep, stop) {

        var that = this;

        that.sliderPosition -= scrollStep;

        if (that.sliderPosition <= stop) that.sliderPosition = 0;

        jQuery(elem).css({
            'margin-bottom':that.sliderPosition
        });

    }
});