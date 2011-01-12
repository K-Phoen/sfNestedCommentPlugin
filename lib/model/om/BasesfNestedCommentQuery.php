<?php


/**
 * Base class that represents a query for the 'sf_nested_comment' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.5 on:
 *
 * Wed 12 Jan 2011 09:38:09 PM WIT
 *
 * @method     sfNestedCommentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     sfNestedCommentQuery orderByAuthorName($order = Criteria::ASC) Order by the author_name column
 * @method     sfNestedCommentQuery orderByAuthorEmail($order = Criteria::ASC) Order by the author_email column
 * @method     sfNestedCommentQuery orderByAuthorUrl($order = Criteria::ASC) Order by the author_url column
 * @method     sfNestedCommentQuery orderByContent($order = Criteria::ASC) Order by the content column
 * @method     sfNestedCommentQuery orderByIsModerated($order = Criteria::ASC) Order by the is_moderated column
 * @method     sfNestedCommentQuery orderByCommentableModel($order = Criteria::ASC) Order by the commentable_model column
 * @method     sfNestedCommentQuery orderByCommentableId($order = Criteria::ASC) Order by the commentable_id column
 * @method     sfNestedCommentQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     sfNestedCommentQuery orderBySfCommentId($order = Criteria::ASC) Order by the sf_comment_id column
 * @method     sfNestedCommentQuery orderByExtra($order = Criteria::ASC) Order by the extra column
 * @method     sfNestedCommentQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     sfNestedCommentQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method     sfNestedCommentQuery orderByTreeLeft($order = Criteria::ASC) Order by the tree_left column
 * @method     sfNestedCommentQuery orderByTreeRight($order = Criteria::ASC) Order by the tree_right column
 * @method     sfNestedCommentQuery orderByTreeLevel($order = Criteria::ASC) Order by the tree_level column
 *
 * @method     sfNestedCommentQuery groupById() Group by the id column
 * @method     sfNestedCommentQuery groupByAuthorName() Group by the author_name column
 * @method     sfNestedCommentQuery groupByAuthorEmail() Group by the author_email column
 * @method     sfNestedCommentQuery groupByAuthorUrl() Group by the author_url column
 * @method     sfNestedCommentQuery groupByContent() Group by the content column
 * @method     sfNestedCommentQuery groupByIsModerated() Group by the is_moderated column
 * @method     sfNestedCommentQuery groupByCommentableModel() Group by the commentable_model column
 * @method     sfNestedCommentQuery groupByCommentableId() Group by the commentable_id column
 * @method     sfNestedCommentQuery groupByUserId() Group by the user_id column
 * @method     sfNestedCommentQuery groupBySfCommentId() Group by the sf_comment_id column
 * @method     sfNestedCommentQuery groupByExtra() Group by the extra column
 * @method     sfNestedCommentQuery groupByCreatedAt() Group by the created_at column
 * @method     sfNestedCommentQuery groupByUpdatedAt() Group by the updated_at column
 * @method     sfNestedCommentQuery groupByTreeLeft() Group by the tree_left column
 * @method     sfNestedCommentQuery groupByTreeRight() Group by the tree_right column
 * @method     sfNestedCommentQuery groupByTreeLevel() Group by the tree_level column
 *
 * @method     sfNestedCommentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     sfNestedCommentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     sfNestedCommentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     sfNestedCommentQuery leftJoinsfNestedCommentRelatedBySfCommentId($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfNestedCommentRelatedBySfCommentId relation
 * @method     sfNestedCommentQuery rightJoinsfNestedCommentRelatedBySfCommentId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfNestedCommentRelatedBySfCommentId relation
 * @method     sfNestedCommentQuery innerJoinsfNestedCommentRelatedBySfCommentId($relationAlias = null) Adds a INNER JOIN clause to the query using the sfNestedCommentRelatedBySfCommentId relation
 *
 * @method     sfNestedCommentQuery leftJoinsfNestedCommentRelatedById($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfNestedCommentRelatedById relation
 * @method     sfNestedCommentQuery rightJoinsfNestedCommentRelatedById($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfNestedCommentRelatedById relation
 * @method     sfNestedCommentQuery innerJoinsfNestedCommentRelatedById($relationAlias = null) Adds a INNER JOIN clause to the query using the sfNestedCommentRelatedById relation
 *
 * @method     sfNestedComment findOne(PropelPDO $con = null) Return the first sfNestedComment matching the query
 * @method     sfNestedComment findOneOrCreate(PropelPDO $con = null) Return the first sfNestedComment matching the query, or a new sfNestedComment object populated from the query conditions when no match is found
 *
 * @method     sfNestedComment findOneById(int $id) Return the first sfNestedComment filtered by the id column
 * @method     sfNestedComment findOneByAuthorName(string $author_name) Return the first sfNestedComment filtered by the author_name column
 * @method     sfNestedComment findOneByAuthorEmail(string $author_email) Return the first sfNestedComment filtered by the author_email column
 * @method     sfNestedComment findOneByAuthorUrl(string $author_url) Return the first sfNestedComment filtered by the author_url column
 * @method     sfNestedComment findOneByContent(string $content) Return the first sfNestedComment filtered by the content column
 * @method     sfNestedComment findOneByIsModerated(boolean $is_moderated) Return the first sfNestedComment filtered by the is_moderated column
 * @method     sfNestedComment findOneByCommentableModel(string $commentable_model) Return the first sfNestedComment filtered by the commentable_model column
 * @method     sfNestedComment findOneByCommentableId(int $commentable_id) Return the first sfNestedComment filtered by the commentable_id column
 * @method     sfNestedComment findOneByUserId(int $user_id) Return the first sfNestedComment filtered by the user_id column
 * @method     sfNestedComment findOneBySfCommentId(int $sf_comment_id) Return the first sfNestedComment filtered by the sf_comment_id column
 * @method     sfNestedComment findOneByExtra(string $extra) Return the first sfNestedComment filtered by the extra column
 * @method     sfNestedComment findOneByCreatedAt(string $created_at) Return the first sfNestedComment filtered by the created_at column
 * @method     sfNestedComment findOneByUpdatedAt(string $updated_at) Return the first sfNestedComment filtered by the updated_at column
 * @method     sfNestedComment findOneByTreeLeft(int $tree_left) Return the first sfNestedComment filtered by the tree_left column
 * @method     sfNestedComment findOneByTreeRight(int $tree_right) Return the first sfNestedComment filtered by the tree_right column
 * @method     sfNestedComment findOneByTreeLevel(int $tree_level) Return the first sfNestedComment filtered by the tree_level column
 *
 * @method     array findById(int $id) Return sfNestedComment objects filtered by the id column
 * @method     array findByAuthorName(string $author_name) Return sfNestedComment objects filtered by the author_name column
 * @method     array findByAuthorEmail(string $author_email) Return sfNestedComment objects filtered by the author_email column
 * @method     array findByAuthorUrl(string $author_url) Return sfNestedComment objects filtered by the author_url column
 * @method     array findByContent(string $content) Return sfNestedComment objects filtered by the content column
 * @method     array findByIsModerated(boolean $is_moderated) Return sfNestedComment objects filtered by the is_moderated column
 * @method     array findByCommentableModel(string $commentable_model) Return sfNestedComment objects filtered by the commentable_model column
 * @method     array findByCommentableId(int $commentable_id) Return sfNestedComment objects filtered by the commentable_id column
 * @method     array findByUserId(int $user_id) Return sfNestedComment objects filtered by the user_id column
 * @method     array findBySfCommentId(int $sf_comment_id) Return sfNestedComment objects filtered by the sf_comment_id column
 * @method     array findByExtra(string $extra) Return sfNestedComment objects filtered by the extra column
 * @method     array findByCreatedAt(string $created_at) Return sfNestedComment objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return sfNestedComment objects filtered by the updated_at column
 * @method     array findByTreeLeft(int $tree_left) Return sfNestedComment objects filtered by the tree_left column
 * @method     array findByTreeRight(int $tree_right) Return sfNestedComment objects filtered by the tree_right column
 * @method     array findByTreeLevel(int $tree_level) Return sfNestedComment objects filtered by the tree_level column
 *
 * @package    propel.generator.plugins.sfNestedCommentPlugin.lib.model.om
 */
abstract class BasesfNestedCommentQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasesfNestedCommentQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'sfNestedComment', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new sfNestedCommentQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    sfNestedCommentQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof sfNestedCommentQuery) {
			return $criteria;
		}
		$query = new sfNestedCommentQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    sfNestedComment|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = sfNestedCommentPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{	
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    sfNestedCommentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(sfNestedCommentPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    sfNestedCommentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(sfNestedCommentPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfNestedCommentQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(sfNestedCommentPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the author_name column
	 * 
	 * @param     string $authorName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfNestedCommentQuery The current query, for fluid interface
	 */
	public function filterByAuthorName($authorName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($authorName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $authorName)) {
				$authorName = str_replace('*', '%', $authorName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(sfNestedCommentPeer::AUTHOR_NAME, $authorName, $comparison);
	}

	/**
	 * Filter the query on the author_email column
	 * 
	 * @param     string $authorEmail The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfNestedCommentQuery The current query, for fluid interface
	 */
	public function filterByAuthorEmail($authorEmail = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($authorEmail)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $authorEmail)) {
				$authorEmail = str_replace('*', '%', $authorEmail);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(sfNestedCommentPeer::AUTHOR_EMAIL, $authorEmail, $comparison);
	}

	/**
	 * Filter the query on the author_url column
	 * 
	 * @param     string $authorUrl The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfNestedCommentQuery The current query, for fluid interface
	 */
	public function filterByAuthorUrl($authorUrl = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($authorUrl)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $authorUrl)) {
				$authorUrl = str_replace('*', '%', $authorUrl);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(sfNestedCommentPeer::AUTHOR_URL, $authorUrl, $comparison);
	}

	/**
	 * Filter the query on the content column
	 * 
	 * @param     string $content The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfNestedCommentQuery The current query, for fluid interface
	 */
	public function filterByContent($content = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($content)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $content)) {
				$content = str_replace('*', '%', $content);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(sfNestedCommentPeer::CONTENT, $content, $comparison);
	}

	/**
	 * Filter the query on the is_moderated column
	 * 
	 * @param     boolean|string $isModerated The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfNestedCommentQuery The current query, for fluid interface
	 */
	public function filterByIsModerated($isModerated = null, $comparison = null)
	{
		if (is_string($isModerated)) {
			$is_moderated = in_array(strtolower($isModerated), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(sfNestedCommentPeer::IS_MODERATED, $isModerated, $comparison);
	}

	/**
	 * Filter the query on the commentable_model column
	 * 
	 * @param     string $commentableModel The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfNestedCommentQuery The current query, for fluid interface
	 */
	public function filterByCommentableModel($commentableModel = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($commentableModel)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $commentableModel)) {
				$commentableModel = str_replace('*', '%', $commentableModel);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(sfNestedCommentPeer::COMMENTABLE_MODEL, $commentableModel, $comparison);
	}

	/**
	 * Filter the query on the commentable_id column
	 * 
	 * @param     int|array $commentableId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfNestedCommentQuery The current query, for fluid interface
	 */
	public function filterByCommentableId($commentableId = null, $comparison = null)
	{
		if (is_array($commentableId)) {
			$useMinMax = false;
			if (isset($commentableId['min'])) {
				$this->addUsingAlias(sfNestedCommentPeer::COMMENTABLE_ID, $commentableId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($commentableId['max'])) {
				$this->addUsingAlias(sfNestedCommentPeer::COMMENTABLE_ID, $commentableId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(sfNestedCommentPeer::COMMENTABLE_ID, $commentableId, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfNestedCommentQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(sfNestedCommentPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(sfNestedCommentPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(sfNestedCommentPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the sf_comment_id column
	 * 
	 * @param     int|array $sfCommentId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfNestedCommentQuery The current query, for fluid interface
	 */
	public function filterBySfCommentId($sfCommentId = null, $comparison = null)
	{
		if (is_array($sfCommentId)) {
			$useMinMax = false;
			if (isset($sfCommentId['min'])) {
				$this->addUsingAlias(sfNestedCommentPeer::SF_COMMENT_ID, $sfCommentId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sfCommentId['max'])) {
				$this->addUsingAlias(sfNestedCommentPeer::SF_COMMENT_ID, $sfCommentId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(sfNestedCommentPeer::SF_COMMENT_ID, $sfCommentId, $comparison);
	}

	/**
	 * Filter the query on the extra column
	 * 
	 * @param     string $extra The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfNestedCommentQuery The current query, for fluid interface
	 */
	public function filterByExtra($extra = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($extra)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $extra)) {
				$extra = str_replace('*', '%', $extra);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(sfNestedCommentPeer::EXTRA, $extra, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfNestedCommentQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(sfNestedCommentPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(sfNestedCommentPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(sfNestedCommentPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updatedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfNestedCommentQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(sfNestedCommentPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(sfNestedCommentPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(sfNestedCommentPeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query on the tree_left column
	 * 
	 * @param     int|array $treeLeft The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfNestedCommentQuery The current query, for fluid interface
	 */
	public function filterByTreeLeft($treeLeft = null, $comparison = null)
	{
		if (is_array($treeLeft)) {
			$useMinMax = false;
			if (isset($treeLeft['min'])) {
				$this->addUsingAlias(sfNestedCommentPeer::TREE_LEFT, $treeLeft['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($treeLeft['max'])) {
				$this->addUsingAlias(sfNestedCommentPeer::TREE_LEFT, $treeLeft['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(sfNestedCommentPeer::TREE_LEFT, $treeLeft, $comparison);
	}

	/**
	 * Filter the query on the tree_right column
	 * 
	 * @param     int|array $treeRight The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfNestedCommentQuery The current query, for fluid interface
	 */
	public function filterByTreeRight($treeRight = null, $comparison = null)
	{
		if (is_array($treeRight)) {
			$useMinMax = false;
			if (isset($treeRight['min'])) {
				$this->addUsingAlias(sfNestedCommentPeer::TREE_RIGHT, $treeRight['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($treeRight['max'])) {
				$this->addUsingAlias(sfNestedCommentPeer::TREE_RIGHT, $treeRight['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(sfNestedCommentPeer::TREE_RIGHT, $treeRight, $comparison);
	}

	/**
	 * Filter the query on the tree_level column
	 * 
	 * @param     int|array $treeLevel The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfNestedCommentQuery The current query, for fluid interface
	 */
	public function filterByTreeLevel($treeLevel = null, $comparison = null)
	{
		if (is_array($treeLevel)) {
			$useMinMax = false;
			if (isset($treeLevel['min'])) {
				$this->addUsingAlias(sfNestedCommentPeer::TREE_LEVEL, $treeLevel['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($treeLevel['max'])) {
				$this->addUsingAlias(sfNestedCommentPeer::TREE_LEVEL, $treeLevel['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(sfNestedCommentPeer::TREE_LEVEL, $treeLevel, $comparison);
	}

	/**
	 * Filter the query by a related sfNestedComment object
	 *
	 * @param     sfNestedComment $sfNestedComment  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfNestedCommentQuery The current query, for fluid interface
	 */
	public function filterBysfNestedCommentRelatedBySfCommentId($sfNestedComment, $comparison = null)
	{
		return $this
			->addUsingAlias(sfNestedCommentPeer::SF_COMMENT_ID, $sfNestedComment->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the sfNestedCommentRelatedBySfCommentId relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfNestedCommentQuery The current query, for fluid interface
	 */
	public function joinsfNestedCommentRelatedBySfCommentId($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('sfNestedCommentRelatedBySfCommentId');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'sfNestedCommentRelatedBySfCommentId');
		}
		
		return $this;
	}

	/**
	 * Use the sfNestedCommentRelatedBySfCommentId relation sfNestedComment object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfNestedCommentQuery A secondary query class using the current class as primary query
	 */
	public function usesfNestedCommentRelatedBySfCommentIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinsfNestedCommentRelatedBySfCommentId($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'sfNestedCommentRelatedBySfCommentId', 'sfNestedCommentQuery');
	}

	/**
	 * Filter the query by a related sfNestedComment object
	 *
	 * @param     sfNestedComment $sfNestedComment  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfNestedCommentQuery The current query, for fluid interface
	 */
	public function filterBysfNestedCommentRelatedById($sfNestedComment, $comparison = null)
	{
		return $this
			->addUsingAlias(sfNestedCommentPeer::ID, $sfNestedComment->getSfCommentId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the sfNestedCommentRelatedById relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfNestedCommentQuery The current query, for fluid interface
	 */
	public function joinsfNestedCommentRelatedById($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('sfNestedCommentRelatedById');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'sfNestedCommentRelatedById');
		}
		
		return $this;
	}

	/**
	 * Use the sfNestedCommentRelatedById relation sfNestedComment object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfNestedCommentQuery A secondary query class using the current class as primary query
	 */
	public function usesfNestedCommentRelatedByIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinsfNestedCommentRelatedById($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'sfNestedCommentRelatedById', 'sfNestedCommentQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     sfNestedComment $sfNestedComment Object to remove from the list of results
	 *
	 * @return    sfNestedCommentQuery The current query, for fluid interface
	 */
	public function prune($sfNestedComment = null)
	{
		if ($sfNestedComment) {
			$this->addUsingAlias(sfNestedCommentPeer::ID, $sfNestedComment->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

	// nested_set behavior
	
	/**
	 * Filter the query to restrict the result to root objects
	 *
	 * @return    sfNestedCommentQuery The current query, for fuid interface
	 */
	public function treeRoots()
	{
		return $this->addUsingAlias(sfNestedCommentPeer::LEFT_COL, 1, Criteria::EQUAL);
	}
	
	/**
	 * Returns the objects in a certain tree, from the tree scope
	 *
	 * @param     int $scope		Scope to determine which objects node to return
	 *
	 * @return    sfNestedCommentQuery The current query, for fuid interface
	 */
	public function inTree($scope = null)
	{
		return $this->addUsingAlias(sfNestedCommentPeer::SCOPE_COL, $scope, Criteria::EQUAL);
	}
	
	/**
	 * Filter the query to restrict the result to descendants of an object
	 *
	 * @param     sfNestedComment $sfNestedComment The object to use for descendant search
	 *
	 * @return    sfNestedCommentQuery The current query, for fuid interface
	 */
	public function descendantsOf($sfNestedComment)
	{
		return $this
			->inTree($sfNestedComment->getScopeValue())
			->addUsingAlias(sfNestedCommentPeer::LEFT_COL, $sfNestedComment->getLeftValue(), Criteria::GREATER_THAN)
			->addUsingAlias(sfNestedCommentPeer::LEFT_COL, $sfNestedComment->getRightValue(), Criteria::LESS_THAN);
	}
	
	/**
	 * Filter the query to restrict the result to the branch of an object.
	 * Same as descendantsOf(), except that it includes the object passed as parameter in the result
	 *
	 * @param     sfNestedComment $sfNestedComment The object to use for branch search
	 *
	 * @return    sfNestedCommentQuery The current query, for fuid interface
	 */
	public function branchOf($sfNestedComment)
	{
		return $this
			->inTree($sfNestedComment->getScopeValue())
			->addUsingAlias(sfNestedCommentPeer::LEFT_COL, $sfNestedComment->getLeftValue(), Criteria::GREATER_EQUAL)
			->addUsingAlias(sfNestedCommentPeer::LEFT_COL, $sfNestedComment->getRightValue(), Criteria::LESS_EQUAL);
	}
	
	/**
	 * Filter the query to restrict the result to children of an object
	 *
	 * @param     sfNestedComment $sfNestedComment The object to use for child search
	 *
	 * @return    sfNestedCommentQuery The current query, for fuid interface
	 */
	public function childrenOf($sfNestedComment)
	{
		return $this
			->descendantsOf($sfNestedComment)
			->addUsingAlias(sfNestedCommentPeer::LEVEL_COL, $sfNestedComment->getLevel() + 1, Criteria::EQUAL);
	}
	
	/**
	 * Filter the query to restrict the result to siblings of an object.
	 * The result does not include the object passed as parameter.
	 *
	 * @param     sfNestedComment $sfNestedComment The object to use for sibling search
	 * @param      PropelPDO $con Connection to use.
	 *
	 * @return    sfNestedCommentQuery The current query, for fuid interface
	 */
	public function siblingsOf($sfNestedComment, PropelPDO $con = null)
	{
		if ($sfNestedComment->isRoot()) {
			return $this->
				add(sfNestedCommentPeer::LEVEL_COL, '1<>1', Criteria::CUSTOM);
		} else {
			return $this
				->childrenOf($sfNestedComment->getParent($con))
				->prune($sfNestedComment);
		}
	}
	
	/**
	 * Filter the query to restrict the result to ancestors of an object
	 *
	 * @param     sfNestedComment $sfNestedComment The object to use for ancestors search
	 *
	 * @return    sfNestedCommentQuery The current query, for fuid interface
	 */
	public function ancestorsOf($sfNestedComment)
	{
		return $this
			->inTree($sfNestedComment->getScopeValue())
			->addUsingAlias(sfNestedCommentPeer::LEFT_COL, $sfNestedComment->getLeftValue(), Criteria::LESS_THAN)
			->addUsingAlias(sfNestedCommentPeer::RIGHT_COL, $sfNestedComment->getRightValue(), Criteria::GREATER_THAN);
	}
	
	/**
	 * Filter the query to restrict the result to roots of an object.
	 * Same as ancestorsOf(), except that it includes the object passed as parameter in the result
	 *
	 * @param     sfNestedComment $sfNestedComment The object to use for roots search
	 *
	 * @return    sfNestedCommentQuery The current query, for fuid interface
	 */
	public function rootsOf($sfNestedComment)
	{
		return $this
			->inTree($sfNestedComment->getScopeValue())
			->addUsingAlias(sfNestedCommentPeer::LEFT_COL, $sfNestedComment->getLeftValue(), Criteria::LESS_EQUAL)
			->addUsingAlias(sfNestedCommentPeer::RIGHT_COL, $sfNestedComment->getRightValue(), Criteria::GREATER_EQUAL);
	}
	
	/**
	 * Order the result by branch, i.e. natural tree order
	 *
	 * @param     bool $reverse if true, reverses the order
	 *
	 * @return    sfNestedCommentQuery The current query, for fuid interface
	 */
	public function orderByBranch($reverse = false)
	{
		if ($reverse) {
			return $this
				->addDescendingOrderByColumn(sfNestedCommentPeer::LEFT_COL);
		} else {
			return $this
				->addAscendingOrderByColumn(sfNestedCommentPeer::LEFT_COL);
		}
	}
	
	/**
	 * Order the result by level, the closer to the root first
	 *
	 * @param     bool $reverse if true, reverses the order
	 *
	 * @return    sfNestedCommentQuery The current query, for fuid interface
	 */
	public function orderByLevel($reverse = false)
	{
		if ($reverse) {
			return $this
				->addAscendingOrderByColumn(sfNestedCommentPeer::RIGHT_COL);
		} else {
			return $this
				->addDescendingOrderByColumn(sfNestedCommentPeer::RIGHT_COL);
		}
	}
	
	/**
	 * Returns a root node for the tree
	 *
	 * @param      int $scope		Scope to determine which root node to return
	 * @param      PropelPDO $con	Connection to use.
	 *
	 * @return     sfNestedComment The tree root object
	 */
	public function findRoot($scope = null, $con = null)
	{
		return $this
			->addUsingAlias(sfNestedCommentPeer::LEFT_COL, 1, Criteria::EQUAL)
			->inTree($scope)
			->findOne($con);
	}
	
	/**
	 * Returns a tree of objects
	 *
	 * @param      int $scope		Scope to determine which tree node to return
	 * @param      PropelPDO $con	Connection to use.
	 *
	 * @return     mixed the list of results, formatted by the current formatter
	 */
	public function findTree($scope = null, $con = null)
	{
		return $this
			->inTree($scope)
			->orderByBranch()
			->find($con);
	}

} // BasesfNestedCommentQuery
