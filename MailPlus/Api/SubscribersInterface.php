<?php

namespace MailPlus\MailPlus\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface SubscribersInterface {
	
	/**
	 * Get subscriber list
	 * @param SearchCriteriaInterface $searchCriteria
	 * @return \MailPlus\MailPlus\Api\Data\SubscriberSearchResultsInterface
	 */
	public function getList(SearchCriteriaInterface $searchCriteria);
}