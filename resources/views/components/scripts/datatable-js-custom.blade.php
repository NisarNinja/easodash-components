
<script>

    var DataTablesLinkify = function(dataTable) {
        this.dataTable = dataTable;
        this.url = location.protocol+'//'+location.host+location.pathname;
        this.link = function() {
            return this.url +
                '?dtsearch='+this.dataTable.search() +
                '&dtpage='+this.dataTable.page();
                //more params like current sorting column could be added here
        }
        //based on http://stackoverflow.com/a/901144/1407478
        this.getParam = function(name) {
            name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                results = regex.exec(location.search);
            return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        }
        this.restore = function() {
            var page = this.getParam('dtpage'), 
                search = this.getParam('dtsearch');
            // this.dataTable.page(parseInt(page)).search(search).draw(false);
            // if (page) this.dataTable.page(parseInt(page)).draw(false);
            //more params to take care of could be added here
        }
        this.restore();
        return this;
    };

    $(document).ready(function(){
        // window.datatable1 = DataTablesLinkify(window.LaravelDataTables["easo-datatable"]);
    })
    
</script>