pimcore.registerNS("pimcore.plugin.CustomEditablesBundle");

pimcore.plugin.CustomEditablesBundle = Class.create(pimcore.plugin.admin, {
    getClassName: function () {
        return "pimcore.plugin.CustomEditablesBundle";
    },

    initialize: function () {
        pimcore.plugin.broker.registerPlugin(this);
    },

    pimcoreReady: function (params, broker) {
        // alert("CustomEditablesBundle ready!");
    }
});

var CustomEditablesBundlePlugin = new pimcore.plugin.CustomEditablesBundle();
