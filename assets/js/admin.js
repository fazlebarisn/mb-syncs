(function ($) {
    $(document).ready(function () {

      // *** Admin tab control start here ***
      var MbSyncsTabs = $(".mb-syncs-tab");
      var tabContents = $(".mb-syncs-content");
  
      function showTab(tabId) {
        MbSyncsTabs.each(function () {
          if ($(this).data("tab") === tabId) {
            $(this).addClass("active");
          } else {
            $(this).removeClass("active");
          }
        });
  
        tabContents.each(function () {
          if (this.id === tabId) {
            $(this).addClass("active");
          } else {
            $(this).removeClass("active");
          }
        });
      }
  
      MbSyncsTabs.on("click", function () {
        var tabId = $(this).data("tab");
        showTab(tabId);
        localStorage.setItem("activeTab", tabId);
      });
  
      var activeTab = localStorage.getItem("activeTab");
      if (activeTab) {
        showTab(activeTab);
      }
      // Admin tab control end here ***
  
    });
  })(jQuery);
  