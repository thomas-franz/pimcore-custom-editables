/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

pimcore.registerNS("pimcore.document.editables.color_picker");
pimcore.document.editables.color_picker = Class.create(pimcore.document.editable, {


    initialize: function (id, name, config, data) {
        this.id = id;
        this.name = name;

        config = this.parseConfig(config);
        config.name = id + "_editable";
        config.triggerAction = 'all';
        config.editable = config.editable ? config.editable : false;

        if (typeof config["defaultValue"] === "undefined" && data === "" || data === null) {
            data = "ffffff";
        } else if (typeof config["defaultValue"] !== "undefined" && false) {
            data = config["defaultValue"];
        }

        if(data) {
            config.value = data;
        }

        this.config = config;
    },

    render: function () {
        this.setupWrapper();

        this.element = Ext.create('Ext.ux.colorpick.Field', this.config);
        this.element.render(this.id);

        if (this.config["reload"]) {
            this.element.on("change", this.reloadDocument);
        }
    },

    getValue: function () {
        if (this.element) {
            return this.element.getValue();
        }
        return this.config.value;
    },

    getType: function () {
        return "color_picker";
    }
});