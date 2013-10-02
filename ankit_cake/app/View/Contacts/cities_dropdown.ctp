<div class="contacts search form">

<fieldset>
<legend>City Search</legend>
      
      <?php       $this->Form->create('Contact', array('type'=>'post','action' => 'find'));
 
        echo $this->Form->input('city', array(
            'empty' => 'Pick a city',
            'label' => 'City',
            'option'=> $cities,
            'id' => 'city',
            'autocomplete' => 'on'));
       
         
        ?>
         
    </fieldset>
</div>
<script type="text/javascript">
$( "#city" ).autocomplete({
  source: "find",
  minLength: 2,
  delay: 2
});
</script>