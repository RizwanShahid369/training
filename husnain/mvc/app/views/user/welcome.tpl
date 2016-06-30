{extends file="../layouts/layout.tpl"}
{block name=title}DashBoard{/block}
{block name=body}
<h3>WELCOME {$data}</h3>

<ul>
    <li><a href="../teacher/listAll">Teacher Panel</a> </li>
    <li><a href="../student/listAll">Student Panel</a> </li>
</ul>



{/block}