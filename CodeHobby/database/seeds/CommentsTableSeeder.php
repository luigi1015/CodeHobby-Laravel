<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
	/**
	 * Run the database seed for the comment table.
	 *
	 * @return void
	 */
	public function run()
	{
		//First comment
		$comment = new \CodeHobby\Comment();
		$comment->name = "Tester Jeff";
		$comment->email = "test@test.test";
		$comment->mesage = "Cras eu bibendum justo. Cras et mi massa. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra magna lectus. Cras et sollicitudin eros, non aliquam odio. Etiam mi metus, facilisis ut euismod sit amet, sagittis non nunc.

Donec at efficitur massa. Maecenas scelerisque turpis vitae mauris finibus consectetur. Nam hendrerit, lorem ut volutpat iaculis, nisl orci porttitor lorem, in imperdiet diam metus luctus mauris. Morbi varius libero non augue auctor consequat. Nulla venenatis laoreet odio. Donec quam est, condimentum eget aliquam sit amet, aliquet id neque. Donec sodales ut elit id malesuada. Proin gravida efficitur ligula, et accumsan diam gravida eleifend. Suspendisse scelerisque velit tortor, at dignissim odio lacinia sit amet. Maecenas feugiat molestie velit sed suscipit. Fusce ultrices risus vitae consequat aliquet. Integer hendrerit turpis eget eleifend faucibus. Pellentesque sapien purus, efficitur vel congue quis, finibus in enim. Suspendisse at mollis velit.

Vivamus ac nibh pulvinar, mattis felis non, auctor dui. Etiam ac pellentesque dolor. Sed nec massa eget metus accumsan molestie. Vivamus porta tellus in enim laoreet eleifend. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras gravida neque sit amet dui fringilla, vel ornare justo fermentum. Nunc porta eros id orci semper varius. In auctor felis non sodales elementum. Mauris sit amet leo sed tellus commodo volutpat porttitor quis lectus. Curabitur feugiat rhoncus augue quis accumsan.

Proin eget auctor nunc, in accumsan ex. Nam feugiat, leo nec pulvinar vulputate, orci ligula consectetur magna, in venenatis lectus nulla molestie sapien. Sed maximus, justo nec dapibus lobortis, tortor leo accumsan tellus, vel fermentum lacus tellus in lectus. Fusce vitae imperdiet ante. Quisque accumsan tellus id lacus malesuada finibus. Sed eu venenatis magna. Nullam sed quam urna. Aenean a massa semper, ornare turpis vitae, vehicula est. Duis nec consequat nisi, sed fringilla dui. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus vulputate felis turpis, eget varius ante scelerisque sit amet. Nam nec libero ac ex lacinia blandit. Sed sollicitudin orci ut metus luctus, vel bibendum tellus elementum. Aenean commodo ipsum vitae metus posuere finibus. Aliquam cursus nunc sed mollis pharetra. Duis ut felis imperdiet, tempus justo vel, convallis ipsum.

Maecenas lobortis, massa ut bibendum eleifend, nisl mi efficitur diam, eget efficitur justo diam id leo. Donec eu gravida libero, et efficitur nisi. Fusce nec quam a neque tristique volutpat. Mauris quis viverra purus. Donec vel pulvinar quam. Quisque metus sapien, tincidunt eget mollis quis, varius ut sem. Vivamus leo nibh, dapibus at est vitae, laoreet placerat ligula. Vivamus interdum, felis non vulputate hendrerit, lacus velit commodo augue, iaculis convallis ligula leo vitae nunc. Aenean dignissim interdum dolor, quis tristique augue consectetur vitae.";

		//Second comment
		$comment = new \CodeHobby\Comment();
		$comment->name = "Tester Jeff #2";
		$comment->email = "test2@test.test";
		$comment->mesage = "In posuere malesuada tortor, posuere viverra enim tempus nec. Nunc lacinia massa non sem rhoncus dapibus. Praesent sagittis scelerisque faucibus. Sed mauris mauris, elementum quis pellentesque a, laoreet non libero. Suspendisse ut ante a velit volutpat sodales. Donec varius dui mi, vel ultrices tellus dictum quis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris placerat in nisl quis eleifend. Curabitur bibendum auctor feugiat. Aenean id faucibus arcu. Maecenas ac convallis lorem. Nam pretium diam augue, vel fermentum dui mollis ut. Ut ut eros mauris. Mauris pretium nulla nec aliquet iaculis. Curabitur sed purus vel nibh ullamcorper tristique ac non mauris. In sed mauris nibh.

Nulla arcu elit, porta nec erat pharetra, aliquam ullamcorper libero. Pellentesque at leo et orci porttitor sagittis quis vitae ante. Vestibulum turpis lectus, pulvinar in tellus at, malesuada egestas dolor. Suspendisse consequat, velit sed ullamcorper eleifend, ante dui suscipit enim, id consectetur dui orci eu tellus. Duis sed gravida felis. Cras auctor lobortis felis ut finibus. In sit amet felis accumsan, varius diam in, interdum dolor. Etiam facilisis pulvinar nisl.

Nullam nec metus sit amet turpis condimentum vehicula. Nullam id eros non tortor mattis finibus nec venenatis lectus. Donec auctor, dui vel condimentum luctus, lorem enim efficitur sem, eu consequat elit quam eu justo. Integer et tortor lorem. Nam vitae est nec nisl pulvinar scelerisque sed blandit nisi. Nulla gravida accumsan sapien. Aenean ultrices odio imperdiet est tempor condimentum. Vestibulum vitae fermentum ipsum. Mauris consequat mauris vel arcu finibus ultricies. Pellentesque eget iaculis metus.

Vivamus sed tellus bibendum, bibendum quam nec, convallis urna. Ut eget convallis sapien. Morbi et metus in lectus semper porta in et velit. Aenean quis dui pharetra, fermentum elit vulputate, finibus odio. Donec luctus tincidunt massa, nec luctus dolor auctor sed. Proin finibus rutrum rutrum. Ut rutrum viverra velit a congue. Nam hendrerit rhoncus pretium.

Nulla facilisi. Aliquam maximus nisi nec felis scelerisque rutrum. Phasellus congue nibh arcu, vel molestie sapien porttitor placerat. Sed ac neque in turpis laoreet mattis. Vivamus sit amet erat libero. Duis tincidunt, sapien eget accumsan lacinia, lorem nunc pretium quam, in placerat felis nibh quis elit. Curabitur ipsum tortor, interdum eu elementum quis, tristique vitae metus. Morbi porttitor tortor eget libero pharetra, tempor euismod neque convallis. Mauris at aliquam enim.";

		//Third comment
		$comment = new \CodeHobby\Comment();
		$comment->name = "Tester Jeff #3";
		$comment->email = "test3@test.test";
		$comment->mesage = "Fusce hendrerit lorem eu dignissim ultricies. Suspendisse dapibus augue tortor, nec tincidunt nibh accumsan sed. Suspendisse hendrerit, sem eu imperdiet pulvinar, lacus ante mattis nunc, aliquet volutpat elit tellus et massa. Praesent et nulla nisi. Aliquam erat volutpat. Mauris augue ligula, ullamcorper vitae vehicula vel, porttitor ut quam. Nam et odio vitae orci efficitur consectetur. Fusce maximus nisi et elit tincidunt, a semper orci facilisis. Pellentesque ut justo ullamcorper, varius ex ut, cursus dolor.";

		//Fourth comment
		$comment = new \CodeHobby\Comment();
		$comment->name = "Tester Jeff #4";
		$comment->email = "test4@test.test";
		$comment->mesage = "This is an internet troll. You were wrong, it's really the lizard people being controlled by the Illuminate.";

		//Fifth comment
		$comment = new \CodeHobby\Comment();
		$comment->name = "Tester Jeff #5, I don't leave comments";
		$comment->email = "test5@test.test";
		$comment->mesage = "";
	}
}
