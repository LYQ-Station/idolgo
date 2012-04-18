<h1>index page</h1>
<hr />
<a href="<?=$this->buildUrl('index', 'category', 'projects', array('c'=>'design'))?>">design category</a><br />
<a href="<?=$this->buildUrl('info', 'index', 'projects', array('id'=>1))?>">project #1</a>

<hr />
<a href="<?=$this->buildUrl('index', 'about')?>">about</a>
<a href="<?=$this->buildUrl('index', 'contact')?>">contact</a>