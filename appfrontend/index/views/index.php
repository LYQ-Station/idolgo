<h1>index page</h1>
<hr />
<a href="<?=$this->buildUrl('for', 'category', 'projects', array('c'=>'design'))?>">design category</a><br />
<a href="<?=$this->buildUrl('info', 'index', 'projects', array('id'=>1))?>">project #1</a><br />
<a href="<?=$this->buildUrl('addmyproject', 'index', 'projects')?>">add project</a><br />

<hr />
<a href="<?=$this->buildUrl('index', 'about')?>">about</a>
<a href="<?=$this->buildUrl('index', 'contact')?>">contact</a>