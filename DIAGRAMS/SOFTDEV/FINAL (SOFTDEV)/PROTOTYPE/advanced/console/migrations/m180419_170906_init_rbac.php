<?php

use yii\db\Migration;

/**
 * Class m180419_170906_init_rbac
 */
class m180419_170906_init_rbac extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        
        $auth = Yii::$app->authManager;

        // add view index permission
        $supplierindex = $auth->createPermission('supplier/index');
        $supplierindex->description = 'Index Supplier';
        $auth->add($supplierindex);

        // add view details permisson
        $supplierview = $auth->createPermission('supplier/view');
        $supplierview->description = 'View Suppliers';
        $auth->add($supplierview);

        // add view index resource permission
        $resourceindex = $auth->createPermission('resource/index');
        $resourceindex->description = 'Index Resources';
        $auth->add($resourceindex);

        // add view details resource permission
        $resourceview = $auth->createPermission('resource/view');
        $resourceview->description = 'View Resources';
        $auth->add($resourceview);


        // add "externaluser" role and give this role the "createPost" permission
        $externaluser = $auth->createRole('externaluser');
        $auth->add($externaluser);
        $auth->addChild($externaluser, $supplierindex);
        $auth->addChild($externaluser, $supplierview);

        $auth->addChild($externaluser, $resourceindex);
        $auth->addChild($externaluser, $resourceview);

        // add "admin" role and give this role the "updatePost" permission
        // as well as the permissions of the "author" role
        // $admin = $auth->createRole('admin');
        // $auth->add($admin);
        // $auth->addChild($admin, $updatePost);
        // $auth->addChild($admin, $author);

        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        $auth->assign($externaluser, 7);
        

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180419_170906_init_rbac cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180419_170906_init_rbac cannot be reverted.\n";

        return false;
    }
    */
}
