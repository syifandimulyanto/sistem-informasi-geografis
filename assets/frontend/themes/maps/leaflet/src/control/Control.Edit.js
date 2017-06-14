L.Control.Edit = L.Control.extend({
	options: {
		position: "bottomleft",
		minZoom: 10
	},

	onAdd: function(map) {
		this._container = L.DomUtil.create('div', 'leaflet-control-attribution');
		L.DomEvent.disableClickPropagation(this._container);
		this._map = map;
		this._map.on("moveend", this._update, this);
		this._href = L.DomUtil.create('a', null, this._container);
		this._href.innerHTML = this.getBody();
		this._href.setAttribute('href', '#');
		this._update();

		var _this = this;
		this._href.onclick = function(e) {
			_this.loadAndZoom(_this._map.getBounds(), true);
			return false;
		};

		return this._container;
	},

	getBody: function() {
		return "Edit";
	},

	_update: function() {
		if (!this._map) return;

		if (this._map.getZoom() < this.options.minZoom)
			this._href.setAttribute('title', "Zoom in to edit");
		else
			this._href.setAttribute('title', "Edit in JOSM");
	},

	loadAndZoom: function(bounds, validate) {
		if (validate) {
			if (!this._map) return;
			if (this._map.getZoom() < this.options.minZoom) return;
		}
		var sw = bounds.getSouthWest(), ne = bounds.getNorthEast();
		var p = ['left=' + sw.lng, 'bottom=' + sw.lat, 'right=' + ne.lng, 'top=' + ne.lat];
		var url = 'http://localhost:8111/load_and_zoom?' + p.join('&');
		var frame = L.DomUtil.create('iframe', null, this._container);
		frame.style.width = frame.style.height = "0px";
		frame.src = url;
		var _this = this;
		frame.onload = function(e) { _this._container.removeChild(frame); };
		return false;
	}
});
