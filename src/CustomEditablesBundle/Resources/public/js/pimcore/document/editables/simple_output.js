pimcore.registerNS("pimcore.document.editables.simple_output");
pimcore.document.editables.simple_output = Class.create(pimcore.document.editable, {

    initialize: function (id, name, config, data, inherited) {
        this.id = id;
        this.name = name;

        this.config = this.parseConfig(config);
        config.name = id + "_editable";
        this.data = config.value;
    },

    render: function () {
        this.setupWrapper();
        this.element = Ext.get(this.id);
        this.element.dom.setAttribute("contenteditable", false);
        this.element.update(this.data);
    },

    getValue: function () {
        if (this.element) {
            return this.data;
        }
        return this.config.value;
    },

    getType: function () {
        return "simple_output";
    }
});