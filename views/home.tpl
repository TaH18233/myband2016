<section>
    {$i=1}
    {foreach from=$result item=oneItem}
        {if $i==0}
            <div id="left">
                <h1>{$oneItem.title}</h1>
                <img src={$oneItem.image}>
                <!--<content>{$oneItem.content|truncate:30}</content>-->
                <content>{$oneItem.content}</content>
                <p>{$oneItem.date_created|date_format:"%e %B %Y"}</p>
            </div>
            {$i=1}
        {else}
            <div id="right">
                <h1>{$oneItem.title}</h1>
                <img src={$oneItem.image}>
                <!--<content>{$oneItem.content|truncate:30}</content>-->
                <content>{$oneItem.content}</content>
                <p>{$oneItem.date_created|date_format:"%e %B %Y"}</p>
            </div>
            {$i=0}
        {/if}
    {/foreach}
</section>

<div id="PageInation">
    <ul>
        {for $foo=1 to $total_number_articles}
            <li><a href="?action=home&page_nr={$foo}">{$foo}</a></li>
        {/for}
    </ul>
</div>
<style>
    #left {
        float: left;
        margin-bottom: 1em;
    }

    #left img {
        width: 49%;
        padding-left: 1%;
    }

    #left content {
        width: 45%;
        float: right;
        margin-right: 1%;
        border: 1px solid black;
        padding: 1%;
        background-color: rgba(255, 255, 255, 0.5);
    }
    #left p {
        padding-left: 5%;
    }

    #left h1 {
        padding-left: 5%;
        margin-top: 5%;
    }

    #right{
        float: right;
        margin-bottom: 1em;
    }
    #right h1 {
        text-align: right;
        padding-right: 5%;
        margin-top: 5%;
    }

    #right content {
        width: 45%;
        float: left;
        margin-left: 1%;
        border: 1px solid black;
        padding: 1%;
        background-color: rgba(255, 255, 255, 0.5);
    }

    #right p {
        float: right;
        padding-right: 5%;
    }

    #right img {
        width: 49%;
        padding-right: 1%;
        float: right;
    }




</style>