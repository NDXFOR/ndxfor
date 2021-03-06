<div id="map">

    <link rel="stylesheet" href="<?= base_url() ?>assets/dermolo/css/leaflet.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dermolo/css/qgis2web.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dermolo/css/fontawesome-all.min.css">

    <script src="<?= base_url() ?>assets/dermolo/js/qgis2web_expressions.js"></script>
    <script src="<?= base_url() ?>assets/dermolo/js/leaflet.js"></script>
    <script src="<?= base_url() ?>assets/dermolo/js/leaflet.rotatedMarker.js"></script>
    <script src="<?= base_url() ?>assets/dermolo/js/leaflet.pattern.js"></script>
    <script src="<?= base_url() ?>assets/dermolo/js/leaflet-hash.js"></script>
    <script src="<?= base_url() ?>assets/dermolo/js/Autolinker.min.js"></script>
    <script src="<?= base_url() ?>assets/dermolo/js/rbush.min.js"></script>
    <script src="<?= base_url() ?>assets/dermolo/js/labelgun.min.js"></script>
    <script src="<?= base_url() ?>assets/dermolo/js/labels.js"></script>
    <script src="<?= base_url() ?>assets/dermolo/data/ADMINISTRASIDESA_AR_25K_0.js"></script>
    <script src="<?= base_url() ?>assets/dermolo/data/balaidesadermolo_1.js"></script>
    <script src="<?= base_url() ?>assets/dermolo/data/cafe_2.js"></script>
    <script src="<?= base_url() ?>assets/dermolo/data/jalan2_3.js"></script>
    <script src="<?= base_url() ?>assets/dermolo/data/masjid_4.js"></script>
    <script src="<?= base_url() ?>assets/dermolo/data/sungai2_5.js"></script>

    <script>
        var map = L.map('map', {
            zoomControl: true,
            maxZoom: 28,
            minZoom: 1
        }).fitBounds([
            [-6.483612403722837, 110.79859339273656],
            [-6.460066116496844, 110.83919833537587]
        ]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({
            truncate: {
                length: 30,
                location: 'smart'
            }
        });
        var bounds_group = new L.featureGroup([]);

        function setBounds() {}

        function pop_ADMINISTRASIDESA_AR_25K_0(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker.link(feature.properties['KDPPUM'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker.link(feature.properties['NAMOBJ'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker.link(feature.properties['REMARK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker.link(feature.properties['KDPBPS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker.link(feature.properties['FCODE'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker.link(feature.properties['LUASWH'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(feature.properties['UUPP'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker.link(feature.properties['SRS_ID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LCODE'] !== null ? autolinker.link(feature.properties['LCODE'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker.link(feature.properties['METADATA'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker.link(feature.properties['KDEBPS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker.link(feature.properties['KDEPUM'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker.link(feature.properties['KDCBPS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker.link(feature.properties['KDCPUM'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker.link(feature.properties['KDBBPS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDBPUM'] !== null ? autolinker.link(feature.properties['KDBPUM'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker.link(feature.properties['WADMKD'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker.link(feature.properties['WIADKD'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker.link(feature.properties['WADMKC'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker.link(feature.properties['WIADKC'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker.link(feature.properties['WADMKK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker.link(feature.properties['WIADKK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker.link(feature.properties['WADMPR'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker.link(feature.properties['WIADPR'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker.link(feature.properties['TIPADM'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SHAPE_Leng'] !== null ? autolinker.link(feature.properties['SHAPE_Leng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SHAPE_Area'] !== null ? autolinker.link(feature.properties['SHAPE_Area'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_ADMINISTRASIDESA_AR_25K_0_0(feature) {
            switch (String(feature.properties['NAMOBJ'])) {
                case 'Bacin':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(33,225,49,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bae':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(213,66,208,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bakalan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(154,61,204,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bakalankrapyak':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(212,189,37,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bakung':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(124,231,17,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Balong':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(22,149,228,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bancak':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(181,119,215,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bandengan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(32,15,208,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bandung':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(104,59,216,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bandungharjo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(219,224,76,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bandungrejo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(59,150,225,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Banget':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(36,53,239,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bango':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(211,151,119,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bangsri':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(101,154,201,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Banjaran':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(130,136,227,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bantengmati':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(167,224,134,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bantrung':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(128,233,114,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Banyumanis':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(239,173,86,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Banyuputih':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(233,84,89,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bapangan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(117,158,228,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Barongan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(204,216,111,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Batealit':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(165,209,124,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Batugede':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(222,108,129,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Batukali':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(207,220,85,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bawu':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(87,211,205,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bendanpete':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(114,203,66,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bendokaton Kidul':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(142,120,239,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bermi':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(227,136,127,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Besito':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(189,209,57,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Betokan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(117,136,221,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bleber':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(137,150,225,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Blimbing Kidul':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(129,143,234,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Blimbingrejo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(67,230,239,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Blingoh':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(83,228,160,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bondo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(140,217,231,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Brantaksekarjati':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(150,224,84,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bringin':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(210,141,13,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Buaran':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(221,16,44,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bucu':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(219,98,223,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bugel':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(103,211,191,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bugo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(219,131,101,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Buko':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(203,34,144,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bulakbaru':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(122,197,212,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bulu':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(228,87,186,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bulungan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(214,129,76,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bumiharjo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(224,28,168,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bungo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(42,94,216,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bungu':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(38,234,182,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Burikan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(133,101,229,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Cabak':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(58,65,202,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Cabean':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(209,107,39,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Cangkring':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(34,229,158,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Cangkringrembang':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(99,77,222,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Cendono':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(54,214,78,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Cepogo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(125,178,213,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Clering':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(214,94,188,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Damaran':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(240,103,54,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Damarjati':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(165,225,45,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Damarwulan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(99,217,130,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Daren':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(91,219,32,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Datar':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(206,91,33,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Demaan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(123,89,225,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Demangan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(217,21,67,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Dermolo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(157,90,224,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Dersalam':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(229,96,222,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Dongos':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(22,211,79,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Dorang':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(50,237,159,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Dudakawu':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(72,219,175,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Dumpil':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(109,123,223,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Gadu':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(107,35,208,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Gajah':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(235,173,97,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Gajihan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(129,127,228,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Gamong':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(178,139,230,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Garung Kidul':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(237,96,40,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Gedangan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(228,51,119,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Gelang':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(240,130,143,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Gemiring Kidul':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(230,198,123,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Gemiring Lor':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(64,185,222,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Gempolsongo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(22,221,239,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Gemulung':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(177,61,216,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Geneng':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(26,217,109,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Gerdu':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(121,165,206,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Gerit':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(158,228,45,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Gesengan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(115,101,220,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Getaspejaten':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(203,198,39,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Getasrabi':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(139,149,238,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Gidangelo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(76,110,203,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Giling':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(236,125,134,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Glantengan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(106,157,208,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Gondangmanis':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(135,120,207,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Gondosari':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(231,179,90,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Gribik':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(231,140,226,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Grogolan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(14,203,200,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Gulang':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(220,60,209,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Gulangpongge':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(195,227,15,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Gunungsari':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(12,84,200,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Gunungwungkal':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(210,177,44,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Gurung Lor':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(220,179,107,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Guwosobokerto':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(112,230,23,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Guyangan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(193,58,211,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jali':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(151,90,221,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jambu':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(75,223,25,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jambu Timur':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(232,92,220,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Janggalan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(215,109,153,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jati Kulon':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(217,180,128,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jati Wetan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(223,129,166,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jatirejo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(171,229,26,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jatisari':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(87,202,86,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jebol':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(234,100,79,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jembulwunut':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(109,134,223,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jepalo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(94,233,51,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jepang':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(207,231,84,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jepangpakis':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(204,85,204,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jerukwangi':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(210,103,231,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jetak':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(42,227,45,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jetiskapuan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(205,208,22,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jinggotan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(49,91,231,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jlegong':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(202,211,71,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jleper':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(112,202,108,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jobokuto':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(227,61,205,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jondang':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(143,235,155,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jrahi':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(200,192,77,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jugo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(193,81,221,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jungpasir':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(201,78,154,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jungsemi':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(202,51,94,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jurang':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(203,103,60,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kajeksan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(22,141,205,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kaliaman':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(65,140,225,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kalianyar':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(183,127,226,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kalicilik':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(84,79,224,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kaligarang':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(202,49,226,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kaliombo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(225,118,181,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kalipitu':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(201,72,154,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kalipucang Kulon':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(201,234,52,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kalipucang Wetan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(185,218,129,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kancilan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(92,203,205,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Karangaji':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(240,71,121,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Karangampel':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(201,152,117,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Karanganyar':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(207,106,205,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Karangbener':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(115,235,235,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Karanggondang':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(41,215,35,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Karangkebagusan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(24,130,217,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Karangmalang':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(82,203,132,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Karangmlati':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(110,225,139,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Karangnongko':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(239,73,67,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Karangrandu':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(228,233,136,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Karangrowo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(203,18,101,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Karangsari':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(166,84,225,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Karimunjawa':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(88,198,225,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kauman':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(78,237,181,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kawak':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(57,229,120,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kecapi':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(69,155,220,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kedondong':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(209,64,175,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kedungcino':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(70,235,24,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kedungdowo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(200,81,57,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kedungkarang':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(232,116,219,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kedungleper':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(204,28,160,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kedungmalang':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(106,205,208,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kedungmutih':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(210,159,112,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kedungsari':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(126,218,143,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kedungsarimulyo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(134,228,110,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kedungwaru Kidul':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(42,224,133,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kedungwaru Lor':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(212,125,124,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kelet':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(231,193,131,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Keling':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(238,111,217,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kemujan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(207,118,88,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kendalasem':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(33,239,205,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kendengsidialit':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(232,89,96,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kenduren':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(238,20,125,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kepuk':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(73,202,61,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kerjasan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(79,41,203,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kerso':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(222,121,110,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Ketanjung':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(231,182,85,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Ketilengsingolelo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(20,211,150,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kirig':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(42,229,73,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Klepu':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(179,121,218,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Klumpit':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(196,78,209,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kotaan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(124,208,64,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kramat':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(232,65,235,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Krandon':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(16,201,176,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Krapyak':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(223,126,232,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Krasak':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(240,213,60,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kriyan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(231,148,65,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kuanyar':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(229,160,107,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kunir':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(214,76,152,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kuwasem':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(219,233,70,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Langgardalem':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(236,176,87,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Langon':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(208,55,94,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Lau':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(78,185,231,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Lebak':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(127,130,216,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Lebuawu':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(122,116,235,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Loram Kulon':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(220,17,105,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Loram Wetan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(167,224,43,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Mambak':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(207,120,179,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Mangunan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(224,102,169,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Mantingan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(58,212,89,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Manyargading':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(107,138,204,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Margorejo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(166,65,216,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Margoyoso':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(64,141,222,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Mayong Kidul':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(139,227,95,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Mayong Lor':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(223,208,39,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Medani':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(228,228,83,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Megawon':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(164,237,55,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Menawan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(51,53,212,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Menganti':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(124,216,190,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Mijen':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(138,98,209,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Mindahan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(59,88,235,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Mindahan Kidul':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(164,204,115,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Mlaten':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(112,82,230,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Mlati Kidul':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(162,224,111,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Mlati Lor':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(47,218,127,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Mlatinorowito':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(185,225,130,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Mlekang':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(79,239,204,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Mojo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(208,43,95,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Mororejo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(128,217,159,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Mulyoharjo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(217,89,193,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Mulyorejo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(50,93,200,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Muryolobo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(67,201,216,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Mutih Kulon':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(135,226,176,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Mutih Wetan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(210,125,144,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Nalumsari':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(167,27,209,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Ngablak':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(111,78,202,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Ngabul':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(75,141,239,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Ngaluran':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(222,31,35,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Nganguk':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(234,68,56,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Ngasem':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(201,134,115,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Ngawen':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(50,213,208,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Ngegot':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(200,137,64,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Ngeling':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(208,20,127,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Ngelo Kulon':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(151,96,210,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Ngelowetan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(139,67,202,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Ngembal Kulon':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(154,114,230,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Ngembalrejo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(211,137,118,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Ngemplak':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(123,212,205,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Ngemplik Wetan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(38,94,200,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Ngetuk':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(117,101,225,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Ngroto':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(213,19,184,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Palemkerep':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(126,181,213,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Pancur':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(130,211,38,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Panggang':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(17,17,233,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Panggung':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(210,62,151,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Panjang':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(101,207,58,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Panjunan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(56,164,218,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Papasan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(50,211,96,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Papringan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(85,229,215,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Parang':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(183,209,79,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Paren':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(226,66,146,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Pasir':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(215,84,106,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Pasuruhan Kidul':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(225,88,109,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Pasuruhan Lor':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(223,42,102,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Payak':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(56,235,128,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Payaman':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(146,232,40,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Pecangan Kulon':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(103,207,165,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Pecangan Wetan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(211,173,36,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Pecuk':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(72,239,81,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Pedawang':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(159,236,58,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Pedurenan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(237,224,129,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Peganjaran':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(115,240,70,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Pekalongan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(233,58,122,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Pelang':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(108,157,225,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Pendem':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(173,44,202,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Pendosawalan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(125,206,135,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Pengkol':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(157,53,201,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Perdopo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(77,169,205,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Petekeyan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(215,86,26,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Piji':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(208,122,51,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Plajan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(49,226,105,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Plaosan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(56,226,26,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Platar':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(187,138,234,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Ploso':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(168,108,216,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Poncoharjo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(214,43,134,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Potroyudan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(87,201,87,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Prambatan Kidul':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(69,90,207,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Prambatan Lor':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(99,209,127,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Pringtulis':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(105,193,207,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Pule':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(189,226,77,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Pulodarat':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(54,235,175,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Puncel':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(172,63,222,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Purwogondo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(85,172,201,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Purwokerto':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(116,192,213,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Purworejo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(200,124,100,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Purwosari':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(207,237,136,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Puyoh':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(32,207,140,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Rahtawu':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(225,91,104,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Rajekwesi':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(123,50,234,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Raji':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(48,207,30,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Ranguklampitan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(234,39,52,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Rau':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(177,30,230,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Rejosari':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(138,80,208,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Rendeng':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(90,204,164,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Rengging':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(224,147,80,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Robayan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(103,213,160,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Ruwit':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(13,224,34,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Samirejo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(147,202,45,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sampok':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(240,162,78,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sari':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(148,110,210,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Saripan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(214,26,16,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sedo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(208,104,119,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sekuro':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(57,212,33,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Semat':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(122,194,204,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sendang':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(221,109,227,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Senenan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(216,79,226,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sengonbugel':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(30,15,229,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sentul':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(97,122,218,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Setrokalangan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(139,93,229,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sidigede':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(68,225,188,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sidomulyo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(73,131,201,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sidorekso':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(207,97,97,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sinanggul':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(120,234,221,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Singocandi':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(143,213,129,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Singorejo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(177,210,56,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sirahan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(83,230,57,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sitiluhur':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(142,22,217,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Slagi':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(187,225,81,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Smanggu':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(231,33,165,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Soco':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(203,176,107,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Somosari':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(154,223,80,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sowan Kidul':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(30,234,16,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sowan Lor':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(84,209,178,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Srikandang':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(154,118,231,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Srobyong':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(201,125,115,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sukodono':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(54,225,148,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sukosono':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(223,25,127,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sumanding':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(223,90,126,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sumur':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(225,64,209,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sunggingan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(87,74,207,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Surodadi':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(134,200,93,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Suwawal':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(213,188,118,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Suwawal Timur':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(237,228,51,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Tahunan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(110,201,187,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Tanggul':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(209,109,87,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Tanggultlare':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(22,204,214,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Tanjung':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(75,229,111,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Tanjungkarang':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(230,210,25,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Tedunan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(222,134,199,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Tegalarum':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(210,129,82,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Tegalombo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(42,110,200,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Tegalsambi':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(234,195,111,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Teluk Wetan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(120,93,217,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Telukawur':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(182,14,212,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Tempel':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(105,211,34,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Tempur':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(163,54,206,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Tempuran':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(95,201,72,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Tengguli':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(221,200,108,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Ternadi':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(83,234,115,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Tigajuru':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(226,114,204,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Trengguli':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(72,231,78,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Tritis':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(107,229,176,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Troso':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(171,99,212,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Tubanan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(207,185,76,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Tugu Lor':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(44,105,226,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Tulakan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(187,123,205,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Tumpangkrasak':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(222,71,102,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Tunahan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(221,91,152,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Tunggulpandean':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(24,210,198,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Turirejo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(111,194,200,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Tuwang':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(81,178,200,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Ujungbatu':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(99,179,216,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Ujungpandan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(66,205,112,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Ujungwatu':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(23,176,232,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Undaan Lor':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(130,226,207,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Wanusoba':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(191,240,29,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Wates':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(237,62,32,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Watuaji':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(224,232,74,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Wedelan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(143,166,235,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Weding':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(115,227,122,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Wedusan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(18,136,220,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Welahan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(201,158,28,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Wergu Kulon':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(56,235,143,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Wonoketingal':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(73,216,128,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Wonorejo':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(109,54,237,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Wonosari':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(232,53,115,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Wrgu Wetan':
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(200,181,119,1.0)',
                            interactive: true,
                    }
                    break;
                default:
                    return {
                        pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(98,237,39,1.0)',
                            interactive: true,
                    }
                    break;
            }
        }
        map.createPane('pane_ADMINISTRASIDESA_AR_25K_0');
        map.getPane('pane_ADMINISTRASIDESA_AR_25K_0').style.zIndex = 400;
        map.getPane('pane_ADMINISTRASIDESA_AR_25K_0').style['mix-blend-mode'] = 'normal';
        var layer_ADMINISTRASIDESA_AR_25K_0 = new L.geoJson(json_ADMINISTRASIDESA_AR_25K_0, {
            attribution: '',
            interactive: true,
            dataVar: 'json_ADMINISTRASIDESA_AR_25K_0',
            layerName: 'layer_ADMINISTRASIDESA_AR_25K_0',
            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
            onEachFeature: pop_ADMINISTRASIDESA_AR_25K_0,
            style: style_ADMINISTRASIDESA_AR_25K_0_0,
        });
        bounds_group.addLayer(layer_ADMINISTRASIDESA_AR_25K_0);
        map.addLayer(layer_ADMINISTRASIDESA_AR_25K_0);

        function pop_balaidesadermolo_1(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['balai desa'] !== null ? autolinker.link(feature.properties['balai desa'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_balaidesadermolo_1_0() {
            return {
                pane: 'pane_balaidesadermolo_1',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(229,182,54,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_balaidesadermolo_1');
        map.getPane('pane_balaidesadermolo_1').style.zIndex = 401;
        map.getPane('pane_balaidesadermolo_1').style['mix-blend-mode'] = 'normal';
        var layer_balaidesadermolo_1 = new L.geoJson(json_balaidesadermolo_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_balaidesadermolo_1',
            layerName: 'layer_balaidesadermolo_1',
            pane: 'pane_balaidesadermolo_1',
            onEachFeature: pop_balaidesadermolo_1,
            pointToLayer: function(feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_balaidesadermolo_1_0(feature));
            },
        });
        bounds_group.addLayer(layer_balaidesadermolo_1);
        map.addLayer(layer_balaidesadermolo_1);

        function pop_cafe_2(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Cafe'] !== null ? autolinker.link(feature.properties['Cafe'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_cafe_2_0() {
            return {
                pane: 'pane_cafe_2',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(225,89,137,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_cafe_2');
        map.getPane('pane_cafe_2').style.zIndex = 402;
        map.getPane('pane_cafe_2').style['mix-blend-mode'] = 'normal';
        var layer_cafe_2 = new L.geoJson(json_cafe_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_cafe_2',
            layerName: 'layer_cafe_2',
            pane: 'pane_cafe_2',
            onEachFeature: pop_cafe_2,
            pointToLayer: function(feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_cafe_2_0(feature));
            },
        });
        bounds_group.addLayer(layer_cafe_2);
        map.addLayer(layer_cafe_2);

        function pop_jalan2_3(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2"><strong>id</strong><br />' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['nama_jalan'] !== null ? autolinker.link(feature.properties['nama_jalan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_jalan2_3_0() {
            return {
                pane: 'pane_jalan2_3',
                opacity: 1,
                color: 'rgba(190,207,80,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 3.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_jalan2_3');
        map.getPane('pane_jalan2_3').style.zIndex = 403;
        map.getPane('pane_jalan2_3').style['mix-blend-mode'] = 'normal';
        var layer_jalan2_3 = new L.geoJson(json_jalan2_3, {
            attribution: '',
            interactive: true,
            dataVar: 'json_jalan2_3',
            layerName: 'layer_jalan2_3',
            pane: 'pane_jalan2_3',
            onEachFeature: pop_jalan2_3,
            style: style_jalan2_3_0,
        });
        bounds_group.addLayer(layer_jalan2_3);
        map.addLayer(layer_jalan2_3);

        function pop_masjid_4(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['masjid'] !== null ? autolinker.link(feature.properties['masjid'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_masjid_4_0() {
            return {
                pane: 'pane_masjid_4',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(152,125,183,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_masjid_4');
        map.getPane('pane_masjid_4').style.zIndex = 404;
        map.getPane('pane_masjid_4').style['mix-blend-mode'] = 'normal';
        var layer_masjid_4 = new L.geoJson(json_masjid_4, {
            attribution: '',
            interactive: true,
            dataVar: 'json_masjid_4',
            layerName: 'layer_masjid_4',
            pane: 'pane_masjid_4',
            onEachFeature: pop_masjid_4,
            pointToLayer: function(feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_masjid_4_0(feature));
            },
        });
        bounds_group.addLayer(layer_masjid_4);
        map.addLayer(layer_masjid_4);

        function pop_sungai2_5(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['sungai'] !== null ? autolinker.link(feature.properties['sungai'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_sungai2_5_0() {
            return {
                pane: 'pane_sungai2_5',
                opacity: 1,
                color: 'rgba(231,113,72,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 3.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_sungai2_5');
        map.getPane('pane_sungai2_5').style.zIndex = 405;
        map.getPane('pane_sungai2_5').style['mix-blend-mode'] = 'normal';
        var layer_sungai2_5 = new L.geoJson(json_sungai2_5, {
            attribution: '',
            interactive: true,
            dataVar: 'json_sungai2_5',
            layerName: 'layer_sungai2_5',
            pane: 'pane_sungai2_5',
            onEachFeature: pop_sungai2_5,
            style: style_sungai2_5_0,
        });
        bounds_group.addLayer(layer_sungai2_5);
        map.addLayer(layer_sungai2_5);
        setBounds();
    </script>