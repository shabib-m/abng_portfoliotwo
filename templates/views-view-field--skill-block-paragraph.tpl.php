<?php
/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
?>
<?php //print $output; ?>
<?php 

$asm_almharh = $row->field_field_asm_almharh[0]["rendered"]["#markup"];
//dpm($data);
$nsbt_atqank = $row->field_field_nsbt_atqank[0]["rendered"]["#markup"];
?>

<div class="">
<div class="flex items-center justify-between my-2 abng-border-bottom">
    <p class="text-white  text-lg">
    <?php print $asm_almharh; ?>
    </p>
    <p class="text-gray-300 text-lg">
    <?php print $nsbt_atqank; ?>%
    </p>
</div>
<div class="relative mb-5">
  <div class="rounded-full border border-teal-400 p-1 shadow-lg shadow-cyan-500/50">
    <div class="flex h-6 items-center justify-center rounded-full shadow-lg bg-cyan-500 shadow-cyan-500/50 text-xs leading-none"
     style="width: <?php print $nsbt_atqank; ?>%; height: 85%;">
      <span class="p-1 text-white font-bold"><?php print $nsbt_atqank; ?>%</span>
    </div>
  </div>
</div>
</div>
