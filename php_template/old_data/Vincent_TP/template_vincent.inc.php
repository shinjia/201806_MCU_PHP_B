<?php
//******************** VINCENT_TP Class ********************//

class VINCENT_TP extends Template
{
   var $file_handle  = "vsg_file_handle_main";
   var $block_handle = "vsg_block_handle_rows";
   var $block_name   = "row";
   var $print_out    = "vsg_print_out";

    
   function VINCENT_TP($_filename)
   {
      $this->set_root(".");
      $this->set_unknowns($unknowns="remove");
      
      $this->set_file($this->file_handle, $_filename);
      $this->set_block($this->file_handle, $this->block_name, $this->block_handle);   
   }
   
   function set($_varname, $_value="")
   {
      $this->set_var($_varname, $_value);
   }
     
   function block()
   {
      $this->parse($this->block_handle, $this->block_name, TRUE);
   }
   
   function show()
   {
      $this->parse($this->print_out, $this->file_handle);
      $this->p($this->print_out); 
   }
   
   function get()
   {
      // Vincent add (2003.01.09)
      return $this->parse($this->print_out, $this->file_handle);
   }
   
   function save($_filename)
   {
      // Vincent add (2002.11.09)
      $this->parse($this->print_out, $this->file_handle);
      
      $_f2p = fopen($_filename, "w");
      fputs($_f2p, $this->finish($this->get_var($this->print_out)));
      fclose($_f2p);
   }
}
?>