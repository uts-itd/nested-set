<?php

namespace PNX\Tree;

/**
 * Provides a tree implementation.
 */
interface NestedSetInterface {

  /**
   * Adds a child to the parent.
   *
   * @param \PNX\Tree\Node $parent
   *   The parent.
   * @param \PNX\Tree\Node $child
   *   The child.
   *
   * @return \PNX\Tree\Node
   *   Returns a new child node with left and right.
   */
  public function addNode(Node $parent, Node $child);

  /**
   * Deletes a node and moves descendants up a level.
   *
   * @param \PNX\Tree\Node $node
   *   The node to delete.
   */
  public function deleteNode(Node $node);

  /**
   * Deletes a node and all it's descendants.
   *
   * @param \PNX\Tree\Node $node
   *   The node to delete.
   */
  public function deleteSubTree(Node $node);

  /**
   * Finds all descendants of a node.
   *
   * @param \PNX\Tree\Node $node
   *   The node.
   * @param int $depth
   *   (optional) A depth limit. Defaults to 0, no limit.
   *
   * @return array
   *   The nested array of descendants.
   */
  public function findDescendants(Node $node, $depth = 0);

  /**
   * Finds all ancestors of a node.
   *
   * @param \PNX\Tree\Node $node
   *   The node.
   *
   * @return array
   *   The ancestors.
   */
  public function findAncestors(Node $node);

  /**
   * Gets a node for the ID and Revision ID.
   *
   * @param int|string $id
   *   The ID.
   * @param int|string $revision_id
   *   The revision ID.
   *
   * @return \PNX\Tree\Node
   *   The node.
   */
  public function getNode($id, $revision_id);

  /**
   * Moves a node and its sub-tree below the target node.
   *
   * @param Node $target
   *   The node to move below.
   * @param \PNX\Tree\Node $node
   *   The node to move.
   */
  public function moveSubTreeBelow(Node $target, Node $node);

  /**
   * Moves a node and its sub-tree before the target node.
   *
   * @param Node $target
   *   The node to move before.
   * @param \PNX\Tree\Node $node
   *   The node to move.
   */
  public function moveSubTreeBefore(Node $target, Node $node);

  /**
   * Moves a node and its sub-tree after the target node.
   *
   * @param Node $target
   *   The node to move after.
   * @param \PNX\Tree\Node $node
   *   The node to move.
   */
  public function moveSubTreeAfter(Node $target, Node $node);

  /**
   * Gets a node at a specified left position.
   *
   * @param int $left
   *   The left position.
   *
   * @return Node
   *   The node.
   */
  public function getNodeAtPosition($left);

}
