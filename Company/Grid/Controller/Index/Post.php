<?php

namespace Company\Grid\Controller\Index;

use Magento\Framework\App\Action\HttpPostActionInterface as HttpPostActionInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\Redirect;
use Magento\Framework\App\Request\DataPersistorInterface;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\DataObject;
use Psr\Log\LoggerInterface;
use Company\Grid\Api\Data\GridInterfaceFactory;


class Post extends \Magento\Framework\App\Action\Action
{   

    private $logger;
   
    private $gridDataFactory;
     private $dataPersistor;

    public function __construct(
        Context $context,
        GridInterfaceFactory  $gridDataFactory,
        DataPersistorInterface $dataPersistor,
        LoggerInterface $logger 

      //  SubUserFactory $subUserFactory
    ) {
        parent::__construct($context);
        $this->gridDataFactory = $gridDataFactory;
        $this->logger = $logger;     
       // $this->subUserFactory = $subUserFactory;
    }

    /**
     * Post user question
     *
     * @return Redirect
     */
    public function execute()
    {
        if (!$this->getRequest()->isPost()) {
            return $this->resultRedirectFactory->create()->setPath('');
        }
         /* $this->messageManager->addSuccessMessage(
                __('Thanks. We\'ll respond to you very soonsdsdsdf.')
             );*/
              try {
                $data = $this->getRequest()->getParams();

                $model = $this->gridDataFactory->create();
                 $this->logger->info('info1234'); 

                $model->setData($data);            
                $model->save();  
                
                $this->messageManager->addSuccessMessage(
                    __('Thanks. We\'ll respond to you very soondf.')
                );



               // $this->saveBuyQuote($this->validatedParams());
                //$this->sendEmail($this->validatedParams());
               /* $this->messageManager->addSuccessMessage(
                        __('Thanks for sending us your Quote and questions. We\'ll respond to you very soon.')
                    );
                    $this->dataPersistor->clear('contact_us');*/
                } catch (LocalizedException $e) {
                    $this->messageManager->addErrorMessage($e->getMessage());
                    //$this->dataPersistor->set('contact_us', $this->getRequest()->getParams());
                } catch (\Exception $e) {
                    $this->logger->info($e);
                    //$this->logger->info('info1234'); 
                    $this->messageManager->addErrorMessage(
                        __('An error occurred while processing your form. Please try again later.')
                    );
                    //$this->dataPersistor->set('contact_us', $this->getRequest()->getParams());
                }
                return $this->resultRedirectFactory->create()->setPath('');



        return $this->resultRedirectFactory->create()->setPath(' ');
    }    


    //

    private function saveBuyQuote($post)
    {
   
        $buyQuoteObj = $this->gridDataFactory->create();
        $ip = $this->remoteAddress->getRemoteAddress();
          $data = array(
               
                'title' => $post['title'],
                'content' => $post['content'],
               
               );
           $this->logger->info('info1234'); 
        $buyQuoteObj->setData($data);  
            $buyQuoteObj->save();    
   }


    private function sendEmail($post)
    {
        $this->mail->send(
            $post['email'],
            ['data' => new DataObject($post)]
        );
    }

    /**
     * @return array
     * @throws \Exception
     */
    private function validatedParams()
    {
        $request = $this->getRequest();
        
        
        if (trim($request->getParam('title')) === '') {
            throw new LocalizedException(__('Enter the title and try again.'));
        }
        if (trim($request->getParam('content')) === '') {
            throw new LocalizedException(__('Enter content.'));
        }
      /*  if (trim($request->getParam('comment')) === '') {
            throw new LocalizedException(__('Enter the comment and try again.'));
        }
        if (false === \strpos($request->getParam('email'), '@')) {
            throw new LocalizedException(__('The email address is invalid. Verify the email address and try again.'));
        }
        if (trim($request->getParam('hideit')) !== '') {
            throw new \Exception();
        }*/

        return $request->getParams();
    }

}
