<?php
/** 
 * %module.name%
 * ============
 * Generated By AksiIDE ( http://www.aksiide.com )
 *
 * ADD DESCRIPTION OF EXTERNSION HERE.
 *
 * This base code was generated with the [gii-extension-generator](http://www.yiiframework.com/extension/gii-extension-generator/)
 * @version 0.1
 * @author ADD YOU NAME HERE
 */


class %module.name% extends CWidget {
	/** The core javascript libs to register.
	 * @var array
	 * @since 0.1
	 */

	private $coreJs = array(
		'jquery',
		'jquery.ui',
	);

	/** The js scripts to register.
	 * @var array
	 * @since 0.1
	 */

	private $js = array(
		'%module.name%.js',
	);

	/** The css scripts to register.
	 * @var array
	 * @since 0.1
	 */

	private $css = array(
		'%module.name%.css',
	);

	/** The asset folder after published
	 * @var string
	 * @since 0.1
	 */

	private $assets;

	private function publishAssets( ) {
		$assets = dirname( __FILE__ ).DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR;
		$this->assets = Yii::app( )->getAssetManager( )->publish( $assets );
	}

	private function registerScripts( ) {
		$cs = Yii::app( )->clientScript;
		foreach ( $this->coreJs as $file ) {
			if ( !$cs->isScriptRegistered( $file ) ) 
				$cs->registerCoreScript( $file );
		}
		foreach ( $this->js as $file ) {
			$cs->registerScriptFile( $this->assets."/".$file, CClientScript::POS_END );
		}
		foreach ( $this->css as $file ) {
			$cs->registerCss( $this->assets."/".$file, '' );
		}
	}

	public function init( ) {
		$this->publishAssets( );
		$this->registerScripts( );
	}

	public function run( ) {
    echo "<h2>This is widget '%module.name%'</h2>";
	}
}
