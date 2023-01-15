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

pimcore.registerNS("pimcore.document.editables.radio_group");
pimcore.document.editables.radio_group = Class.create(pimcore.document.editable, {

    initialize: function (id, name, config, data, inherited) {
        this.id = id;
        this.name = name;

        config = this.parseConfig(config);
        config.name = id + "_editable";

        var defaultValueKey = config.name;
        let defaultValue = config.defaultValue;

        config.editable = config.editable ? config.editable : false;

        config.listeners = {};
        if (config["reload"]) {
            config.listeners.change = this.reloadDocument;
        }

        if (typeof config.items !== "undefined") {
            config.items = config.items.map(function (value) {
//TODO Select the default value if empty
                if (value[0] === defaultValue && data.length >= 0) {
                    return {
                        "boxLabel": value[0],
                        "inputValue": value[1],
                        "checked": true
                    }
                } else {
                    return {
                        "boxLabel": value[0],
                        "inputValue": value[1],
                    }
                }
            });
        }

        // if (typeof defaultValue !== "undefined" && data === null) {
        //     // data = defaultValue;
        //     // data= [defaultValueKey, defaultValue];
        //
        // }

        if (data) {
            config.value = data;
        }
        this.config = config;

        // debugger;
    },

    render: function () {
        this.setupWrapper();
        this.element = Ext.create('Ext.form.RadioGroup', this.config);
        this.element.render(this.id);

    },

    getValue: function () {
        if (this.element) {
            return this.element.getValue();
        }

        return this.config.value;

    },

    getType: function () {
        return "radio_group";
    }
});
