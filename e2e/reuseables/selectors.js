module.exports = {
  // animations
  createGifIcon: '#wv-animation-widget-file-video-icon',
  createGifButton: '.gif-dialog .button-text',
  gifPreviewStartDate: '.gif-download-grid .grid-child:nth-child(2) span',
  gifPreviewEndDate: '.gif-download-grid .grid-child:nth-child(4) span',
  gifPreviewFrameRateValue: '.gif-download-grid .grid-child:nth-child(6) span',
  gifPreviewEndResolutionSelector: '.gif-selector-case #gif-resolution',
  gifPreviewEndResolutionOption250: '#gif-resolution option[value="1"]',
  gifPreviewEndResolutionOption500: '#gif-resolution option[value="2"]',
  gifDownloadIcon: '.animation-gif-dialog-wrapper .wv-button.gray',
  gifDownloadButton: '.animation-gif-dialog-wrapper .wv-button',
  gifResults: '.gif-results-dialog-case img',
  animationWidget: '#wv-animation-widget',
  animationButtonCase: '#timeline-header .animate-button',
  animationButton: '#animate-button',

  // sidebar, layers
  sidebarContainer: '#productsHolder',
  infoButton: '.wv-layers-info',
  optionsButton: '.wv-layers-options',
  infoDialog: '.layer-info-settings-modal',
  optionsDialog: '.layer-info-settings-modal',
  addLayers: '#layers-add',
  dataDownloadTabButton: '#download-sidebar-tab',
  eventsSidebarTabButton: '#events-sidebar-tab',
  groupCheckbox: '#group-overlays-checkbox',
  viirsFiresCheckbox: '#VIIRS_NOAA20_Thermal_Anomalies_375m_All-checkbox',
  firesGroup: '#active-Fires_and_Thermal_Anomalies',
  firesLayer: '#active-VIIRS_NOAA20_Thermal_Anomalies_375m_All',
  firesRemove: '#close-activeVIIRS_NOAA20_Thermal_Anomalies_375m_All',
  aodGroup: '#active-Aerosol_Optical_Depth',
  aodGroupHeader: '#active-Aerosol_Optical_Depth .layer-group-header',
  overlaysGroup: '#active-overlays',
  overlaysGroupHeader: '#active-overlays .layer-group-header',
  baselayersGroup: '#active-baselayers',
  baselayersGroupHeader: '#active-baselayers .layer-group-header',
  groupOptionsBtn: '.layer-group-more-options > button',
  groupHide: '.layer-group-more-options #hide-all',
  groupShow: '.layer-group-more-options #show-all',
  groupRemove: '.layer-group-more-options #remove-group',
  layerVisible: 'li.layer-visible',
  layerHidden: 'li.layer-hidden',
  groupedOverlaysAllLayers: '.layer-container > ul .item.productsitem',

  // compare
  swipeButton: '#compare-swipe-button',
  opacityButton: '#compare-opacity-button',
  spyButton: '#compare-spy-button',
  aTab: '.ab-tabs-case .ab-tab.first-tab',
  bTab: '.ab-tabs-case .ab-tab.second-tab',
  swipeDragger: '.ab-swipe-line .ab-swipe-dragger',
  compareButton: '#compare-toggle-button',
  compareButtonText: '#compare-toggle-button > span',
  compareMobileSelectToggle: '.comparison-mobile-select-toggle',

  // measure
  measureBtn: '#wv-measure-button',
  measureMenu: '#measure_menu',
  measureDistanceBtn: '#measure-distance-button',
  measureAreaBtn: '#measure-area-button',
  clearMeasurementsBtn: '#clear-measurements-button',
  unitOfMeasureToggle: '.measure-unit-toggle .custom-control-label',
  measurementTooltip: '.tooltip-measure',
  geoMeasurementTooltip: '#wv-map-geographic .tooltip-measure',
  arcticMeasurementTooltip: '#wv-map-arctic .tooltip-measure',
  downloadGeojsonBtn: '#download-geojson-button',
  downloadShapefileBtn: '#download-shapefiles-button',

  // timeline
  timelineContainer: '.timeline-container',
  timelineHeader: '#timeline-header',
  mobileDatePickerSelectButton: '.mobile-date-picker-select-btn',
  dragger: '.timeline-dragger',
  dayDown: '.input-wrapper-day > div.date-arrows.date-arrow-down',
  dayUp: '.input-wrapper-day > div.date-arrows.date-arrow-up',
  monthDown: '.input-wrapper-month > div.date-arrows.date-arrow-down',
  monthUp: '.input-wrapper-month > div.date-arrows.date-arrow-up',
  yearDown: '.input-wrapper-year > div.date-arrows.date-arrow-down',
  yearUp: '.input-wrapper-year > div.date-arrows.date-arrow-up',


  // layers
  layersModalCloseButton: '.custom-layer-dialog .modal-header .close',
  aerosolOpticalDepth: '#legacy-all #layer-category-item-legacy-all-aerosol-optical-depth',
  layersSearchField: 'input#layers-search-input',
  categoriesNav: '#categories-nav',
  allCategoryHeader: '#legacy-all .layer-category-name',
  layersAll: '.layers-all-layer',
  layerBrowseList: '.layer-list-container.browse',
  layerBrowseDetail: '.layer-detail-container.browse',
  layerSearchList: '.layer-list-container.search',
  layersSearchRow: '.search-row.layers-all-layer',
  layerPickerBackButton: '#layer-search .back-button',
  layerDetails: '.layer-detail-container',
  layerDetailsDateRange: '.source-metadata .layer-date-range',
  layerDetailHeader: '.layer-detail-container .layers-all-header',
  layerResultsCountText: '.header-filter-container .results-text',
  addToMapButton: '.layer-detail-container .add-to-map-btn',
  aodMeasurement: '#layer-category-item-atmosphere-aerosol-optical-depth',
  aodAllMeasurement: '#layer-category-item-legacy-all-aerosol-optical-depth',
  aodMeasurementContents: '#accordion-atmosphere-aerosol-optical-depth .measure-row-contents',
  aodAllMeasurementContents: '#accordion-legacy-all-aerosol-optical-depth',
  aodTabContentAquaMODIS: '#aerosol-optical-depth-aqua-modis',
  aodCheckbox: '#checkbox-case-MODIS_Aqua_Aerosol',
  aodCheckboxMODIS: '#checkbox-case-MODIS_Combined_Value_Added_AOD',
  aodCheckboxMAIAC: '#checkbox-case-MODIS_Combined_MAIAC_L2G_AerosolOpticalDepth',
  aodCheckboxAquaMODIS: '#checkbox-case-MODIS_Aqua_Aerosol',
  aquaTerraMODISTab: '#aqua-terra-modis-0-source-Nav',
  aquaModisTab: '#aqua-modis-1-source-Nav',
  correctedReflectanceCheckboxContainer: '#checkbox-case-MODIS_Aqua_CorrectedReflectance_TrueColor',
  correctedReflectanceChecked: '#checkbox-case-MODIS_Aqua_CorrectedReflectance_TrueColor .wv-checkbox.checked',
  weldReflectanceCheckboxContainer: '#checkbox-case-Landsat_WELD_CorrectedReflectance_TrueColor_Global_Monthly',
  weldUnavailableTooltipIcon: '#checkbox-case-Landsat_WELD_CorrectedReflectance_TrueColor_Global_Monthly #availability-info',
  availableFilterCheckbox: '#coverage-facet .sui-multi-checkbox-facet__option-input-wrapper:first-of-type',
  availableFilterCheckboxInput: '#coverage-facet .sui-multi-checkbox-facet__option-input-wrapper:first-of-type input',
  availableFilterTextEl: '#coverage-facet .sui-multi-checkbox-facet__option-input-wrapper:first-of-type > span',
  coverageTooltipIcon: '#coverage-facet svg.facet-tooltip',
  scienceDisciplinesTab: '#categories-nav .nav-item:nth-child(2)',
  aodSidebarLayer: '#active-MODIS_Combined_Value_Added_AOD',
  aodMAIACSidebarLayer: '#active-MODIS_Combined_MAIAC_L2G_AerosolOpticalDepth',
  filterButton: '.btn.filter-button',
  resetButton: '.btn.clear-filters',
  applyButton: '.btn.apply-facets',
  collapsedLayerButton: '#accordion-toggler-button',
  layerCount: '.layer-count.mobile',
  layerContainer: '.layer-container.sidebar-panel',
  sourceMetadataCollapsed: '.source-metadata.overflow',
  sourceMetadataExpanded: '.source-metadata',
  aquaTerraModisHeader: '#modisterraandaquacombinedvalueaddedaerosolopticaldepth',
  maiacHeader: '#maiacaerosolopticaldepth',
  sourceTabs: '.source-nav-item',
  aodSearchRow: '#MODIS_Aqua_Aerosol-search-row',
  aodSearchCheckbox: '#MODIS_Aqua_Aerosol-search-row > .wv-checkbox',
  availableFacetLabel: '#coverage-facet .sui-multi-checkbox-facet__option-input-wrapper:first-of-type',
  categoryAtmosphereLabel: '#categories-facet [for="example_facet_CategoryAtmosphere"]',
  categoryFacetCollapseToggle: '#categories-facet .facet-collapse-toggle',
  categoryFacetChoicesContainer: '#categories-facet .sui-multi-checkbox-facet',
  measurementTemperatureLabel: '#measurements-facet [for="example_facet_MeasurementsTemperature"]',
  measurementFacetChoices: '#measurements-facet .sui-multi-checkbox-facet > label',
  measurementMoreButton: '#measurements-facet .sui-facet-view-more',
  sourcesMERRALabel: '#sources-facet [for="example_facet_SourceMERRA-2"]',

  // map
  geographicMap: '#wv-map-geographic',
  arcticMap: '#wv-map-arctic',
  antarcticMap: '#wv-map-antarctic',
  zoomInButton: '.wv-map-zoom-in',
  zoomOutButton: '.wv-map-zoom-out',
  mapScaleMetric: '.wv-map-scale-metric',
  mapScaleImperial: '.wv-map-scale-imperial',
  mapRotateLeft: '.wv-map-rotate-left',
  mapRotateReset: '.wv-map-reset-rotation',
  mapRotateRight: '.wv-map-rotate-right',

  // ui toolbar
  locationSearchToolbarButton: '#wv-location-search-button',
  shareToolbarButton: '#wv-share-button',
  projToolbarButton: '#wv-proj-button',
  snapshotToolbarButton: '#wv-image-button',
  infoToolbarButton: '#wv-info-button',

  // share
  shareToolbar: '#toolbar_share_link',
  shareLinkInput: '#permalink-content-link',

  // Location Search
  locationSearchComponent: '.location-search-component',
  locationSearchMobileDialog: '#toolbar_location_search_mobile',
  locationSearchMinimizeButton: '.location-search-minimize-button',
  tooltipCoordinatesContainer: '.tooltip-coordinates-container',
  tooltipCoordinatesTitle: '.tooltip-coordinates-title',
  tooltipCoordinates: '.tooltip-coordinates',
  tooltipCoordinatesMinimizeButton: '.minimize-coordinates-tooltip',
  tooltipCoordinatesCloseButton: '.close-coordinates-tooltip',
  coordinatesMapMarker: '.coordinates-map-marker',
};
