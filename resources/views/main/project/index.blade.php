<style>
    #custom-search-form {
        margin:0;
        margin-top: 5px;
        padding: 0;
    }

    #custom-search-form .search-query {
        padding-right: 3px;
        padding-right: 4px \9;
        padding-left: 3px;
        padding-left: 4px \9;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */

        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }

    #custom-search-form button {
        border: 0;
        background: none;
        /** belows styles are working good */
        padding: 2px 5px;
        margin-top: 2px;
        position: relative;
        left: -28px;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }

    .search-query:focus + button {
        z-index: 3;
    }
</style>
<div class="col-md-12" style="background-color: #55AA55; padding-top:60px;">

    <div class="container">
        <div class="row">
            <div class="span12">
                <form id="custom-search-form" class="form-search form-horizontal pull-right">
                    <div class="input-append span12">
                        <input type="text" class="search-query" placeholder="Search">
                        <button type="submit" class="btn"><i class="icon-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>