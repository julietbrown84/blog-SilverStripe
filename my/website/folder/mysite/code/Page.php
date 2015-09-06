<?php
class Page extends SiteTree {

	// private static $db = array(
	// );

	// private static $has_one = array(
	// );


	private static $db = array(
		'PageSummary' => 'HTMLText',
		'IsNavigationBasePage' => 'Boolean',
		'NavIcon' => 'Varchar(255)',
		'FeatureBox' => 'HTMLText'
	);

	private static $has_one = array(
		'Author' => 'Member',
		'FeatureBoxImage' => 'Image'
	);

	private static $belongs_many_many = array(
        'Pages' => 'Page'
    );

    private static $many_many = array(
        'Quicklinks' => 'Page'
    );
}

public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->insertBefore(
			HTMLEditorField::create('PageSummary')
				->setDescription('A brief summary of what this page contains')
				->setRows(10)
		,'Content'); 


class Page_Controller extends ContentController {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	private static $allowed_actions = array (
	);

	public function init() {
		parent::init();
		// You can include any CSS or JS required by your project here.
		// See: http://doc.silverstripe.org/framework/en/reference/requirements
	}

}
